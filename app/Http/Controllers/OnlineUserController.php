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

        // Đếm các phiên hoạt động trong 1 giây qua
        foreach ($files as $file) {
            if (filemtime($file) >= now()->subSeconds(1)->timestamp) {
                $activeSessions++;
            }
        }
        // return redirect()->route('client.filter',compact(['onlineCount' => $activeSessions]));
        return response()->json(['onlineCount' => $activeSessions]);

    }
}
