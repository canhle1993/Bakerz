<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function home()
    
    {
        $vehicles = User::all();
        return view('driver.home', compact('vehicles'));
    }

    public function profile($userid)
    {
        $user= Auth::user();
      
        return view('driver.profile');
    }
    

}
