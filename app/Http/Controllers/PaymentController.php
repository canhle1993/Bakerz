<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function vnpayReturn(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $vnp_ResponseCode = $request->get('vnp_ResponseCode');

        if ($vnp_ResponseCode == '00') {
            // Lấy order_id từ URL
            $order_id = $request->get('order_id');
            if (!$order_id) {
                return redirect()->route('client.home')->with('error', 'Order_id not found.');
            }
            $order = Order::find($order_id);
            if (!$order) {
                return redirect()->route('client.home')->with('error', 'Order not found.');
            }
            $order->status = "Paid";
            $order->save();
            $_SESSION['success'] = 'Đã thanh toán thành công. Mong gặp lại quý khách lần sau!';
            // Lấy thông tin của order từ database
        } else {
            $_SESSION['error'] = 'Thanh toán thất bại. Vui lòng thử lại.';
        }
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        // Kiểm tra xem session có được lưu không
        return redirect()->route('client.profile', ['userid' => $currentUser->user_id]);;
    }
}
