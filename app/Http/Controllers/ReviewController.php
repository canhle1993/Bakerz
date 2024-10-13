<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserReview;
use App\Models\UserReviewReply;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    // Hàm lưu đánh giá vào bảng userreview
    public function store(Request $request, $product_id)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to be logged in to review the product.');
        }

        $request->validate([
            'ratestar' => 'required|integer|between:1,5',
            'comment' => 'nullable|string',
        ]);

        $review = UserReview::create([
            'ratestar' => $request->input('ratestar'),
            'comment' => $request->input('comment'),
            'user_id' => Auth::id(),
            'product_id' => $product_id,
            'CreatedDate' => now(),
            'CreatedBy' => Auth::user()->name,
        ]);

        // Tạo thông báo cho admin
        Notification::create([
            'user_id' => Auth::id(),  // ID người dùng
            'review_id' => $review->id,  // ID của review
            'reply_id' => null,  // Không có reply
            'is_read' => 0,  // Đánh dấu là chưa đọc
            'type' => 'review',  // Loại thông báo là review
            'created_at' => Carbon::now(),  // Thời gian tạo thông báo
        ]);

        return redirect()->route('product.single', ['product' => $product_id])->with('success', 'Your review has been submitted successfully!');
    }

    public function manage(Request $request)
    {
        // Lấy giá trị tìm kiếm từ request
        $searchName = $request->query('searchName');
        $searchRating = $request->query('searchRating');
    
        // Lấy danh sách đánh giá và áp dụng tìm kiếm, sắp xếp theo CreatedDate
        $reviews = UserReview::with(['user', 'product.catalogs'])
            ->where('is_deleted', 0)
            ->when($searchName, function ($query, $searchName) {
                return $query->whereHas('user', function ($q) use ($searchName) {
                    $q->where('name', 'like', '%' . $searchName . '%');
                });
            })
            ->when($searchRating, function ($query, $searchRating) {
                return $query->where('ratestar', $searchRating);
            })
            ->orderBy('CreatedDate', 'desc')  // Sắp xếp theo CreatedDate mới nhất
            ->paginate(10);
    
        // Lấy danh sách thông báo chưa đọc
        $notifications = Notification::with('user')
            ->where('is_read', 0)
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Đánh dấu tất cả các thông báo là đã đọc
        Notification::where('is_read', 0)->update(['is_read' => 1]);
    
        return view('admin.reviews.manage', compact('reviews', 'notifications'));
    }
    

    // Xóa đánh giá (đánh dấu là đã xóa)
    public function delete($id)
    {
        // Tìm đánh giá theo ID
        $review = UserReview::findOrFail($id);

        // Đánh dấu là đã xóa
        $review->is_deleted = 1;
        $review->save();

        // Chuyển hướng lại với thông báo thành công
        return redirect()->route('admin.reviews.manage')->with('success', 'The review has been successfully hidden.');
    }
    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        // Tìm đánh giá theo ID
        $review = UserReview::findOrFail($id);

        // Lưu câu trả lời mới
        UserReviewReply::create([
            'userreview_id' => $review->ID,
            'user_id' => Auth::id(),
            'reply' => $request->input('reply')
        ]);

        return redirect()->back()->with('success', 'Response has been successfully submitted.');
    }

    // Lấy đánh giá 5 sao để hiển thị
    public function showFiveStarReviews()
    {
        // Lấy đánh giá 5 sao mới nhất của mỗi tài khoản
        $fiveStarReviews = User::join('userreview', 'user.user_id', '=', 'userreview.user_id') // Sử dụng 'user.user_id'
            ->where('userreview.ratestar', '=', 5)
            ->where('userreview.is_deleted', 0)  // Điều kiện loại bỏ đánh giá đã bị xóa
            ->whereIn('userreview.ID', function ($query) {
                $query->select(DB::raw('MAX(u3.ID)'))
                    ->from('userreview as u3')
                    ->where('u3.ratestar', '=', 5)
                    ->where('u3.is_deleted', 0)  // Điều kiện loại bỏ đánh giá đã bị xóa trong subquery
                    ->groupBy('u3.user_id');
            })
            ->select('user.user_id', 'user.name', 'user.email', 'user.avatar', 'userreview.comment', 'userreview.CreatedDate')
            ->orderBy('userreview.CreatedDate', 'desc')
            ->limit(5)  // Giới hạn chỉ lấy 5 kết quả
            ->get();


        // dd($fiveStarReviews);
        // Truyền biến $fiveStarReviews vào view
        return view('client.pages.about', compact('fiveStarReviews'));
    }

}
