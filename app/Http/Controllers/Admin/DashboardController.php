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
         // Lấy thông báo từ Notification và truyền vào view
         $notifications = Notification::with('user')
         ->where('is_read', 0)
         ->orderBy('created_at', 'desc')
         ->get();

        return view('admin.dashboard', compact('notifications'));
}





public function markAsRead()
{
   // Đánh dấu tất cả các thông báo là đã đọc
   Notification::where('is_read', 0)->update(['is_read' => 1]);

   // Chuyển hướng admin đến trang quản lý review
   return redirect()->route('admin.reviews.manage');
}

}