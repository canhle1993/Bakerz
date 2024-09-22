<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ManageClientController extends Controller
{
    public function index()
    {

        $clients = User::where('role_id', '=', 1)->whereNull('isdelete')->paginate(5);

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
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'avatar_url' => 'nullable|url'
        ]);

        $avatarName = null;

    // Kiểm tra nếu người dùng upload file từ máy cục bộ
    if ($request->hasFile('avatar')) {
        // Lấy tên file gốc và lưu trực tiếp vào thư mục public/storage/avatars
        $avatarName = $request->file('avatar')->getClientOriginalName();
        $request->file('avatar')->move(public_path('storage/avatars'), $avatarName); // Di chuyển file vào public/storage/avatars
    }

    // Nếu không upload file, kiểm tra URL ảnh từ bên ngoài
    if (!$avatarName && $request->input('avatar_url')) {
        $avatarName = $request->input('avatar_url'); // Lưu URL vào cơ sở dữ liệu
    }

        // Tạo mới client
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => 1,
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'avatar' => $avatarName,
            'isdelete' => null
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
    // Tìm client theo user_id
    $client = User::findOrFail($id);

    // Validation dữ liệu đầu vào
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:user,email,' . $client->user_id.',user_id',
        'password' => 'nullable|string|min:6',
        'phone' => 'nullable|string',
        'gender' => 'nullable|string',
        'address' => 'nullable|string',
        'note' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'avatar_url' => 'nullable|url'
    ]);

    // Giữ avatar cũ nếu không thay đổi
    $avatarName = $client->avatar;

    // Xử lý trường hợp upload avatar mới từ máy cục bộ
    if ($request->hasFile('avatar')) {
        // Xóa avatar cũ nếu có
        if ($client->avatar && file_exists(public_path('storage/avatars/'.$client->avatar))) {
            unlink(public_path('storage/avatars/'.$client->avatar)); // Xóa avatar cũ
        }

        // Lưu avatar mới vào public/storage/avatars
        $avatarName = $request->file('avatar')->hashName(); // Tạo tên file duy nhất
        $request->file('avatar')->storeAs('avatars', $avatarName, 'public'); // Lưu vào storage/app/public/avatars
    }

    // Nếu người dùng không upload file và nhập URL, cập nhật URL
    if (!$request->hasFile('avatar') && $request->input('avatar_url')) {
        $avatarName = $request->input('avatar_url'); // Lưu URL ảnh từ bên ngoài
    }

    // Cập nhật thông tin client
    $client->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password') ? bcrypt($request->input('password')) : $client->password,
        'phone' => $request->input('phone'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'note' => $request->input('note'),
        'avatar' => $avatarName,
        'role_id' => 1, // Giữ nguyên role_id là 1 cho client
        'isdelete' => null
    ]);

    // Redirect về trang quản lý client với thông báo thành công
    return redirect()->route('manage-client')->with('success', 'Client updated successfully');
}


    public function destroy($id)
    {
        $client = User::findOrFail($id);
        $client->update(['isdelete' => 1]);

        return redirect()->route('manage-client')->with('success', 'Client deleted successfully');
    }

    public function blacklist(){

        $blacklistedUsers = User::where('isdelete', '1')->paginate(5);
    return view('admin.manage-blacklist', compact('blacklistedUsers'));
    }

    public function restore($id)
{
    $user = User::findOrFail($id);
    $user->update(['isdelete' => null]);

    return redirect()->route('manage-blacklist')->with('success', 'User restored successfully');
}
}
