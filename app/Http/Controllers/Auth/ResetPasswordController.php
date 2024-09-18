<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MyTestEmail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function reset(Request $request)
    {
        
        $user = User::where('email', $request->email)->first();
        // Xác thực email
        $request->validate([
            'email' => 'required|email|exists:user',
        ]);
        
        // Tạo mật khẩu mới
        $newPassword = Str::random(8);
        

        // Cập nhật mật khẩu trong cơ sở dữ liệu
        $user->password = Hash::make($newPassword);
        $user->save();
    
        $data = [
            'title' => 'Đây là tiêu đề của email',
            'message' => 'Nội dung của email được gửi từ Laravel',
            'name' => $user->name,
            'email' => $user->email,
            'password' => $newPassword,
        ];

        Mail::to($user->email)->send(new MyTestEmail($data));

        return redirect()->route('login')->with('new_password', $newPassword);
    }
}
