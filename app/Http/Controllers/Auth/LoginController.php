<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('client.home');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in using Auth::attempt()
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // If successful, then redirect to their intended location
            $user = Auth::user();
            if ($user->isdelete == 1)
            {
                return back()->withErrors([
                    'isdelete' => 'Your account has been deleted',
                ])->withInput($request->only('isdelete'));
            }

            if ($user->role_id == 2 || $user->role_id == 3 && $user->role_id != null) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }

        }

        // If unsuccessful, then redirect back to the login with the form data
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    // Method to handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('cart'); // Xóa session 'cart'

        return redirect('/');
    }
}
