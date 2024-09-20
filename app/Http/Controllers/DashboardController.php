<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id !=2){
            return redirect()->route('client.home')->with('error','aaaaaaa');
        }
        return view('admin.dashboard');
        
    }
}
