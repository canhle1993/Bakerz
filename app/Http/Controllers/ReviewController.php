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
    
    
}
