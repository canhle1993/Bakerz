<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserReview;
use App\Models\UserReviewReply;

class ReviewController extends Controller
{
    // Hàm lưu đánh giá vào bảng userreview
    public function store(Request $request, $product_id)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để đánh giá sản phẩm.');
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
        'user_id' => Auth::id(),
        'review_id' => $review->ID,
        'reply_id' => null,
        'is_read' => 0,

    ]);

        return redirect()->route('product.single', ['product' => $product_id])->with('success', 'Đánh giá của bạn đã được gửi thành công!');
    }

    // Hiển thị trang quản lý đánh giá
    public function manage()
    {
        // Lấy danh sách đánh giá và phân trang
        $reviews = UserReview::with(['user', 'product.catalogs'])
            ->where('is_deleted', 0)
            ->paginate(10); // Phân trang

        // Lấy danh sách thông báo chưa đọc
        $notifications = Notification::with('user')
            ->where('is_read', 0)
            ->orderBy('created_at', 'desc')
            ->get();

        // Đánh dấu tất cả các thông báo là đã đọc
        Notification::where('is_read', 0)->update(['is_read' => 1]);

        // Truyền dữ liệu vào view
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
        return redirect()->route('admin.reviews.manage')->with('success', 'Đánh giá đã được ẩn thành công.');
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

        return redirect()->back()->with('success', 'Trả lời đã được gửi thành công.');
    }



}
