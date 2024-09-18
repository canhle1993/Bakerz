<?php

namespace App\Http\Controllers;
use App\Models\User;


class DriverController extends Controller
{
    public function home()
    
    {
        $vehicles = User::all();
        return view('driver.home', compact('vehicles'));
    }
    

}
