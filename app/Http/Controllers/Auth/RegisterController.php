<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MyTestEmail;
use App\Mail\RegisterEmail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect()->route('client.home');
        }
        return view('auth.register');
    }

    // Method to handle registration
    public function register(Request $request)
    {
        // Validate the form data
        $this->validator($request->all())->validate();

        try {
            // Create the user
            $user = $this->create($request->all());

            $data = [
                'title' => 'Đây là tiêu đề của email',
                'message' => 'Nội dung của email được gửi từ Laravel',
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),

                'phone' => $request->get('phone'),
                'address' => $request->get('address'),

            ];

            Mail::to($user->email)->send(new RegisterEmail($data));

        } catch (Exception $e) {

            return back()->withErrors([
                'email' => 'duplicate emails.',
            ])->withInput($request->only('email'));
        }

        // Log the user in
        Auth::login($user);

        // Redirect to dashboard
        $user = Auth::user();
        if ($user->role_id == 2 && $user->role_id != null  ) {
            return redirect()->intended('admin.dashboard');
        } else {
            return redirect()->intended('/');
        }

    }

    // Validate the incoming request data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

            'phone' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],

        ]);
    }

    protected function valid_changepass(array $data)
    {
        return Validator::make($data, [
            'oldpassword' => ['required', 'string', 'min:8'],
            'newpassword' => ['required', 'string', 'min:6', 'confirmed'],
            'newpassword_confirmation' => ['required', 'string', 'min:8'], // Được kiểm tra bởi 'confirmed'
        ]);
    }

    // Create a new user instance
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role_id' => 1, // Gán mặc định role_id là 1 cho client đăng ký nha ( nếu không bị xung đột code)
        ]);
    }
    public function showGetPasswordForm()
    {
        return view('auth.getpass');
    }

    public function showChangePasswordForm()
    {
        return view('auth.changepass');
    }

    public function changepass(Request $request)
    {
        $this->valid_changepass($request->all())->validate();

        // Lấy người dùng hiện tại
        $user = User::find(Auth::user()->user_id);

        // Kiểm tra mật khẩu cũ có đúng không
        if (!Hash::check($request->oldpassword, $user->password)) {
            return back()->withErrors(['oldpassword' => 'The old password is incorrect.']);
        }

        // Cập nhật mật khẩu mới
        $user->password = Hash::make($request->newpassword);
        $user->save();

        return redirect()->route('client.profile', ['userid' => $user->user_id])
        ->with('success', 'Password has been changed successfully.');
}
}
