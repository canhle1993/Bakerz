<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class AdminChefController extends Controller
{
    // Phương thức hiển thị form thêm chefs và danh sách chefs
    public function create()
    {
        $chefs = Chef::all(); // Lấy tất cả thông tin Chef
        return view('admin.our-chef', compact('chefs')); // Trả về view của form và danh sách đầu bếp
    }

    // Phương thức lưu thông tin đầu bếp mới
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048', // Giới hạn kích thước ảnh tải lên
        ]);

        // Xử lý file ảnh
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('chefs', 'public');
        }

        // Lưu dữ liệu đầu bếp vào cơ sở dữ liệu
        Chef::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'image' => $imagePath ?? '',
        ]);

        return redirect()->route('admin.chefs.create')->with('success', 'Chef added successfully.');
    }

    // Phương thức để xóa chef
    public function destroy($id)
    {
        $chef = Chef::findOrFail($id);
        $chef->delete();

        return redirect()->route('admin.chefs.create')->with('success', 'Chef deleted successfully.');
    }

    // Phương thức cập nhật thông tin chef
    public function update(Request $request, $id)
{
    $chef = Chef::findOrFail($id);

    // Validate dữ liệu đầu vào
    $request->validate([
        'name' => 'required',
        'position' => 'required',
        'description' => 'required',
        'image' => 'sometimes|image|max:2048',
    ]);

    // Xử lý file ảnh nếu có upload mới
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('chefs', 'public');
        $chef->image = $imagePath;
    }

    // Cập nhật thông tin chef
    $chef->name = $request->name;
    $chef->position = $request->position;
    $chef->description = $request->description;

    $chef->save();

    return redirect()->route('admin.chefs.create')->with('success', 'Chef updated successfully.');
}

}
