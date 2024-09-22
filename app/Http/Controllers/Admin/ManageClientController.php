<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ManageClientController extends Controller
{
    public function index(){

        $clients = User::where('isdelete', 0)->where('role_id', 1)->get(); // Lọc client không bị xóa
        return view('admin.manage-client', compact('clients'));
    }

    public function create()
    {
        return view('admin.manage-client-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|boolean',
            'address' => 'nullable|string',
            'note' => 'nullable|string',
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
            'role_id' => 1, // Gán role_id = 1 cho client
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'note' => $request->input('note'),
            'avatar' => $avatarPath,
            'isdelete' => 0 // Đặt trạng thái chưa bị xóa
        ]);

        return redirect()->route('manage-client')->with('success', 'Client added successfully');
    }

    public function edit($id)
    {
        $client = User::findOrFail($id);
        return view('admin.manage-client-edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,' . $client->user_id,
            'password' => 'nullable|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|boolean',
            'address' => 'nullable|string',
            'note' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('avatar')) {
            if ($client->avatar && Storage::disk('public')->exists($client->avatar)) {
                Storage::disk('public')->delete($client->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $client->avatar = $avatarPath;
        }

        $client->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password') ? bcrypt($request->input('password')) : $client->password,
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'note' => $request->input('note'),
            'avatar' => $client->avatar,
        ]);

        return redirect()->route('admin.manage-client')->with('success', 'Client updated successfully');
    }
    public function destroy($id)
    {
        $client = User::findOrFail($id);
        $client->update(['isdelete' => 1]);

        return redirect()->route('manage-client')->with('success', 'Client deleted successfully');

    }
}
