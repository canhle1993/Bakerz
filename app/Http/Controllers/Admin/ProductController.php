<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Hiển thị danh sách các sản phẩm
    public function index()
    {
        $products = Product::where('isdelete', '<>', 1)
                   ->orWhereNull('isdelete')
                   ->paginate(5);
        return view('admin.product_management', compact('products'));
    }

    // Hiển thị form thêm sản phẩm mới
    public function create()
    {
        $catalogs = Catalog::all();  // Lấy tất cả catalog
        $heathys = HeathyCatalog::all();  // Lấy tất cả heathycase
        return view('admin.newproduct',compact('catalogs','heathys'));
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'product_name' => 'required|string|max:255',
            'inventory' => 'required|integer|min:0',
            'describe' => 'nullable|string',
            'price' => 'required|numeric|min:1',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
        ]);

        $product = new Product();
        // Cập nhật thông tin cơ bản
        $product->product_name = $request->input('product_name');
        $product->inventory = $request->input('inventory');
        $product->price = $request->input('price');
        $product->describe = $request->input('describe');
        $product->CreatedBy = Auth::user()->user_id;

        // Xử lý hình ảnh (nếu có)
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = time() . '_0.' . $file->getClientOriginalExtension();
            $request->main_image->storeAs('products', $filename, 'public');
            // Lưu tên ảnh vào bảng product_image
            $product->image = $filename;
            // Kiểm tra nếu file đã lưu thành công
        }
        $product->save();

        $productImages = $product->images()->orderBy('image', 'asc')->get();
        if ($request->hasFile('image_1')) {
            $file = $request->file('image_1');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $request->image_1->storeAs('products', $filename, 'public');   
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $product->product_id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
            // Kiểm tra nếu file đã lưu thành công

        }
        if ($request->hasFile('image_2')) {
            if ($productImages->isNotEmpty() && isset($productImages[1]) && Storage::disk('public')->exists('products/' . $productImages[1]->image)) {
                Storage::disk('public')->delete('products/' . $productImages[1]->image);
                $productImages[1]->delete(); // Xóa ảnh cũ từ DB
            }
            $file = $request->file('image_2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $request->image_2->storeAs('products', $filename, 'public');   
            
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $product->product_id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
        }

        if ($request->hasFile('image_3')) {
            if ($productImages->isNotEmpty() && isset($productImages[2]) && Storage::disk('public')->exists('products/' . $productImages[2]->image)) {
                Storage::disk('public')->delete('products/' . $productImages[2]->image);
                $productImages[2]->delete(); // Xóa ảnh cũ từ DB
            }
            $file = $request->file('image_3');
            $filename = time() . '_3.' . $file->getClientOriginalExtension();
            $request->image_3->storeAs('products', $filename, 'public');   
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $product->product_id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
        }

        // Cập nhật liên kết catalog và heathy
        $product->catalogs()->sync($request->input('catalog', []));
        $product->heathyCatalogs()->sync($request->input('heathy', []));
        // Lưu các thay đổi
        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    // Hiển thị form sửa sản phẩm
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Tìm sản phẩm
        $product = Product::findOrFail($id);

        // Cập nhật thông tin cơ bản
        $product->product_name = $request->input('product_name');
        $product->inventory = $request->input('inventory');
        $product->price = $request->input('price');
        $product->describe = $request->input('describe');
        $product->ModifiedBy = Auth::user()->user_id;

        // Xử lý hình ảnh (nếu có)
        if ($request->hasFile('main_image')) {
            if (Storage::disk('public')->exists('products/' . $product->image)) {
                Storage::disk('public')->delete('products/' . $product->image);
            }
            $file = $request->file('main_image');
            $filename = time() . '_0.' . $file->getClientOriginalExtension();
            $request->main_image->storeAs('products', $filename, 'public');
            // Lưu tên ảnh vào bảng product_image
            $product->image = $filename;
            // Kiểm tra nếu file đã lưu thành công
        }
        $productImages = $product->images()->orderBy('image', 'asc')->get();
        if ($request->hasFile('image_1')) {
            if ($productImages->isNotEmpty() && isset($productImages[0]) && Storage::disk('public')->exists('products/' . $productImages[0]->image)) {
                Storage::disk('public')->delete('products/' . $productImages[0]->image);
                $productImages[0]->delete(); // Xóa ảnh cũ từ DB
            }
            $file = $request->file('image_1');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $request->image_1->storeAs('products', $filename, 'public');   
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
            // Kiểm tra nếu file đã lưu thành công

        }
        if ($request->hasFile('image_2')) {
            if ($productImages->isNotEmpty() && isset($productImages[1]) && Storage::disk('public')->exists('products/' . $productImages[1]->image)) {
                Storage::disk('public')->delete('products/' . $productImages[1]->image);
                $productImages[1]->delete(); // Xóa ảnh cũ từ DB
            }
            $file = $request->file('image_2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $request->image_2->storeAs('products', $filename, 'public');   
            
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
        }

        if ($request->hasFile('image_3')) {
            if ($productImages->isNotEmpty() && isset($productImages[2]) && Storage::disk('public')->exists('products/' . $productImages[2]->image)) {
                Storage::disk('public')->delete('products/' . $productImages[2]->image);
                $productImages[2]->delete(); // Xóa ảnh cũ từ DB
            }
            $file = $request->file('image_3');
            $filename = time() . '_3.' . $file->getClientOriginalExtension();
            $request->image_3->storeAs('products', $filename, 'public');   
            // Lưu tên ảnh vào bảng product_image
            ProductImage::create([
                'product_id' => $id,
                'image' => $filename,
                'CreatedBy' => Auth::user()->user_id,
            ]);
        }

        // Cập nhật liên kết catalog và heathy
        $product->catalogs()->sync($request->input('catalog', []));
        $product->heathyCatalogs()->sync($request->input('heathy', []));
        $catalogs = Catalog::all();  // Lấy tất cả catalog
        $heathys = HeathyCatalog::all();  // Lấy tất cả heathycase
        // Lưu các thay đổi
        $product->save();
        $product = Product::with('catalogs')->find($id); // Lấy sản phẩm cùng với các catalog đã liên kết

        return view('admin.productdetail', compact('product','catalogs','heathys'));
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

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
    public function showDetail($id)
    {
        $product = Product::with('catalogs')->find($id); // Lấy sản phẩm cùng với các catalog đã liên kết
        $catalogs = Catalog::all();  // Lấy tất cả catalog
        $heathys = HeathyCatalog::all();  // Lấy tất cả heathycase
        // Logic xử lý
        return view('admin.productdetail', compact('product','catalogs','heathys'));
    }
}
