<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function vnpayReturn(Request $request)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $vnp_ResponseCode = $request->get('vnp_ResponseCode');

    if ($vnp_ResponseCode == '00') {
        $_SESSION['success'] = 'Đã thanh toán thành công. Mong gặp lại quý khách lần sau!';
    } else {
        $_SESSION['error'] = 'Thanh toán thất bại. Vui lòng thử lại.';
    }

    // Kiểm tra xem session có được lưu không

    return redirect()->route('client.home');
}



}
