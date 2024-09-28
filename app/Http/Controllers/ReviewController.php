<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserReview;

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
    
        UserReview::create([
            'ratestar' => $request->input('ratestar'),
            'comment' => $request->input('comment'),
            'user_id' => Auth::id(),
            'product_id' => $product_id,
            'CreatedDate' => now(),
            'CreatedBy' => Auth::user()->name,
        ]);
    
        return redirect()->route('product.single', ['product' => $product_id])->with('success', 'Đánh giá của bạn đã được gửi thành công!');
    }

    // Hiển thị trang quản lý đánh giá
    public function manage()
    {
        // Lấy tất cả đánh giá chưa bị xóa
        $reviews = UserReview::with('user')->where('is_deleted', 0)->get();
        return view('admin.reviews.manage', compact('reviews'));
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
}
