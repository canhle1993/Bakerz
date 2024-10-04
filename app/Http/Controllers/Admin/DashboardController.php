<?php
namespace App\Http\Controllers\Admin;
use App\Models\Notification;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == null){
            return redirect()->route('client.home')->with('error','aaaaaaa');
        }
                    // Lấy thông báo đơn hàng
                $orderNotifications = Notification::with('user', 'order')
                ->where('is_read', 0)
                ->where('type', 'order')  // Lọc thông báo loại 'order'
                ->orderBy('created_at', 'desc')
                ->get();

            // Lấy thông báo đánh giá
            $reviewNotifications = Notification::with('user', 'review')
                ->where('is_read', 0)
                ->where('type', 'review')  // Lọc thông báo loại 'review'
                ->orderBy('created_at', 'desc')
                ->get();

        return view('admin.dashboard', compact('orderNotifications', 'reviewNotifications'));
    }





public function markAsRead()
{
   // Đánh dấu tất cả các thông báo review là đã đọc
   Notification::where('is_read', 0)->where('type', 'review')->update(['is_read' => 1]);

   // Chuyển hướng admin đến trang quản lý review
   return redirect()->route('admin.reviews.manage');
}


public function markasreadOrder()
{
    // Cập nhật tất cả các thông báo liên quan đến đơn hàng chưa đọc thành đã đọc
    Notification::where('is_read', 0)->where('type', 'order')->update(['is_read' => 1]);

    // Chuyển hướng đến trang pending orders mà bạn đã có sẵn
    return redirect()->route('order.paid');
}
}