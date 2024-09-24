<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == null){
            return redirect()->route('client.home')->with('error','aaaaaaa');
        }
        return view('admin.dashboard');

    }
}
