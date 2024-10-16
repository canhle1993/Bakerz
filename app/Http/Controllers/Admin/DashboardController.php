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
        $orderNotifications = Notification::with('user', 'order')
        ->where('is_read', 0)
        ->where('type', 'order')
        ->orderBy('created_at', 'desc')
        ->limit(10) // Chỉ lấy 10 thông báo gần đây nhất
        ->get();

    $reviewNotifications = Notification::with('user', 'review')
        ->where('is_read', 0)
        ->where('type', 'review')
        ->orderBy('created_at', 'desc')
        ->limit(10) // Chỉ lấy 10 thông báo gần đây nhất
        ->get();

        return view('admin.chart', compact('orderNotifications', 'reviewNotifications'));
    }





public function markAsRead($id)
{

    $notification = Notification::where('id', $id)
    ->where('type', 'review')
    ->first();

if ($notification) {
    Notification::where('id', $notification->id)
        ->where('type', 'review') // Chỉ cập nhật thông báo loại review
        ->update(['is_read' => 1]);
}

    return redirect()->route('admin.reviews.manage');
}


public function markasreadOrder($id)
{
    $notification = Notification::where('id', $id)
    ->where('type', 'order')
    ->first();

if ($notification) {
    Notification::where('id', $notification->id)
        ->where('type', 'order') // Chỉ cập nhật thông báo loại order
        ->update(['is_read' => 1]);
    return redirect()->route('order.paid');
}
}
}