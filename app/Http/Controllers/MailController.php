<?php

namespace App\Http\Controllers;

use App\Mail\MyTestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'title' => 'Đây là tiêu đề của email',
            'message' => 'Nội dung của email được gửi từ Laravel',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Auth::user()->password,
        ];

        Mail::to('aplevancanh1993@gmail.com')->send(new MyTestEmail($data));

        return "Email đã được gửi thành công!";
    }
}
