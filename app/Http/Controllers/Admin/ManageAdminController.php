<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ManageAdminController extends Controller
{
    // Hiển thị danh sách admin
    public function index()
    {
        $admins = User::where('role_id', 2)->get(); // Lọc admin với role_id = 2
        return view('admin.manage-admin', compact('admins'));
    }

    // Hiển thị form thêm admin mới
    public function create()
    {
        return view('admin.manage-admin-create');
    }

    // Lưu admin mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|boolean',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
         // Xử lý upload avatar
         $avatarPath = null;
         if ($request->hasFile('avatar')) {
             $avatarPath = $request->file('avatar')->store('avatars', 'public');
         }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => 2, // Admin role
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'avatar' => $avatarPath,
            'isdelete' => 0
        ]);

        return redirect()->route('manage-admin')->with('success', 'Admin added successfully');
    }

    // Hiển thị form sửa admin
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    // Cập nhật thông tin admin
    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,' . $admin->user_id,
            'password' => 'nullable|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|boolean',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('avatar')) {
            if ($admin->avatar && Storage::disk('public')->exists($admin->avatar)) {
                Storage::disk('public')->delete($admin->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admin->avatar = $avatarPath;

        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password') ? bcrypt($request->input('password')) : $admin->password,
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'avatar' => $admin->avatar,
        ]);

        return redirect()->route('manage-admin')->with('success', 'Admin updated successfully');
    }
}

    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->update(['isdelete' => 1]);

        return redirect()->route('manage-admin')->with('success', 'Admin deleted successfully');
    }
}


