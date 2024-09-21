<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;




class ProductController extends Controller
{
    // Hiển thị danh sách các sản phẩm
    public function index()
    {
        $products = Product::where('isdelete', 0)->get(); // Chỉ lấy các sản phẩm chưa bị xóa
        return view('admin.dashboard', compact('products'));
    }

    // Hiển thị form thêm sản phẩm mới
    public function create()
    {
        return view('admin.create');
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'product_name' => 'required|string|max:255',
            'inventory' => 'required|integer|min:0',
            'describe' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Xử lý tải lên hình ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');  // Lưu ảnh vào thư mục public/storage/products
        }

        // Lưu thông tin sản phẩm
        Product::create([
            'product_name' => $request->input('product_name'),
            'inventory' => $request->input('inventory'),
            'describe' => $request->input('describe'),
            'price' => $request->input('price'),
            'status' => $request->input('status'),
            'image' => $imagePath,
            'CreatedDate' => now(),
            'CreatedBy' => Auth::user()->id ?? null,,  // Nếu có người dùng đăng nhập
            'isdelete' => 0  // Đặt giá trị mặc định là không bị xóa
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully');
    }

    // Hiển thị form sửa sản phẩm
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Cập nhật thông tin sản phẩm
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'product_name' => 'required|string|max:255',
            'inventory' => 'required|integer|min:0',
            'describe' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Tìm sản phẩm theo id
        $product = Product::findOrFail($id);

        // Xử lý tải lên hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ (nếu cần)
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        // Cập nhật thông tin sản phẩm
        $product->update([
            'product_name' => $request->input('product_name'),
            'inventory' => $request->input('inventory'),
            'describe' => $request->input('describe'),
            'price' => $request->input('price'),
            'status' => $request->input('status'),
            'ModifiedDate' => now(),
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }

    // Xóa sản phẩm (đánh dấu là đã xóa)
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Đánh dấu sản phẩm là đã xóa (isdelete = 1)
        $product->update([
            'isdelete' => 1,
            'ModifiedDate' => now(),
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
