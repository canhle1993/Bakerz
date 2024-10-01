<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineUserController extends Controller
{
    public function countOnlineUsers()
    {
        // Lấy tất cả các file session từ thư mục
        $files = glob(storage_path('framework/sessions/*'));
        $activeSessions = 0;

        // Đếm các phiên hoạt động trong 2 phút qua
        foreach ($files as $file) {
            if (filemtime($file) >= now()->subMinutes(2)->timestamp) {
                $activeSessions++;
            }
        }

        // Trả về view với số lượng người dùng đang online
        return view('your_view', ['onlineCount' => $activeSessions]);
    }
}
