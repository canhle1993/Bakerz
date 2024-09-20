<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    
    public function updateAvatar(Request $request)
    {
        // dd('BEGIN');
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        
        $user = User::where('user_id', Auth::user()->user_id)->first();
                
        // Xóa ảnh cũ nếu có
        if ($user && $user->avatar) {
            if (Storage::disk('public')->exists('avatars/' . $user->avatar)) {
                Storage::disk('public')->delete('avatars/' . $user->avatar);
            }
        }

        // Lưu ảnh mới
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        
        $request->avatar->storeAs('avatars', $avatarName, 'public');        
        // // Cập nhật ảnh trong cơ sở dữ liệu
        $user->avatar = $avatarName;
                
        $user->save();

        return redirect()->back()->with('success', 'Avatar updated successfully.');
    }

}
