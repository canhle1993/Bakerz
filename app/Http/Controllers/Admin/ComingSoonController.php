<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComingSoon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ComingSoonController extends Controller
{
    public function index()
    {
        // Lấy tất cả các sản phẩm sắp ra mắt từ bảng coming_soon chưa bị xóa
        $coming_soon = ComingSoon::where('isdelete', 0)->get();

        // Lấy danh sách tất cả các sản phẩm để hiển thị trong form thêm/sửa
        $products = Product::all();

        // Trả về view và truyền dữ liệu coming_soon và products sang view
        return view('admin.coming_soon', compact('coming_soon', 'products'));
    }

    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'release_date' => 'required|date',
            'price' => 'required|numeric|min:0',
            'product_id' => 'required|exists:product,product_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.coming_soon.index')
                ->withErrors($validator)
                ->withInput();
        }

        // Xử lý upload ảnh
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('coming_soon', 'public');
        } else {
            $imagePath = null;
        }

        // Tạo bản ghi mới cho Coming Soon
        ComingSoon::create([
            'image' => $imagePath,
            'name' => $request->name,
            'release_date' => $request->release_date,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'isdelete' => 0,
        ]);

        return redirect()->route('admin.coming_soon.index')->with('success', 'Sản phẩm sắp ra mắt đã được thêm thành công.');
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu nhập vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'release_date' => 'required|date',
            'price' => 'required|numeric|min:0',
            'product_id' => 'required|exists:product,product_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.coming_soon.index')
                ->withErrors($validator)
                ->withInput();
        }

        $coming_soon = ComingSoon::find($id);
        if (!$coming_soon) {
            return redirect()->route('admin.coming_soon.index')->with('error', 'Sản phẩm không tồn tại.');
        }

        // Xử lý upload ảnh nếu có
        if ($request->hasFile('image')) {
            if ($coming_soon->image && Storage::disk('public')->exists($coming_soon->image)) {
                Storage::disk('public')->delete($coming_soon->image);
            }
            $imagePath = $request->file('image')->store('coming_soon', 'public');
            $coming_soon->image = $imagePath;
        }

        // Cập nhật các trường khác
        $coming_soon->name = $request->name;
        $coming_soon->release_date = $request->release_date;
        $coming_soon->price = $request->price;
        $coming_soon->product_id = $request->product_id;
        $coming_soon->save();

        return redirect()->route('admin.coming_soon.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $coming_soon = ComingSoon::find($id);
        if (!$coming_soon) {
            return redirect()->route('admin.coming_soon.index')->with('error', 'Sản phẩm không tồn tại.');
        }

        $coming_soon->isdelete = 1;
        $coming_soon->save();

        return redirect()->route('admin.coming_soon.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    public function showComingSoonPage()
    {
        // Lấy tất cả các sản phẩm sắp ra mắt chưa bị xóa
        $comingSoon = ComingSoon::where('isdelete', 0)
            ->orderBy('release_date', 'desc')
            ->get();

        // Trả về view và truyền dữ liệu các sản phẩm sắp ra mắt
        return view('client.pages.coming-soon', compact('comingSoon'));
    }
}
