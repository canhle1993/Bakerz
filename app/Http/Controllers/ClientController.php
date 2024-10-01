<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function home()

    {
        $client = User::all();
        return view('client.home', compact('client'));
    }

    public function profile($userid)
    {
        $user= Auth::user();

        return view('client.profile');
    }


}
