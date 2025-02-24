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
    public function index(Request $request)
    {
        $query = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                });


        // Kiểm tra nếu có tìm kiếm
        if ($request->has('search')) {
            $query->where('Product.product_name', 'like', '%' . $request->search . '%');
        }

        // Xử lý sắp xếp theo các cột
        if ($request->has('sort')) {
            // Sắp xếp theo Category
            if ($request->sort == 'category_asc') {
                $query->orderBy('category_name', 'asc');
            } elseif ($request->sort == 'category_desc') {
                $query->orderBy('category_name', 'desc');
            } 
            // Sắp xếp theo Name
            elseif ($request->sort == 'name_asc') {
                $query->orderBy('Product.product_name', 'asc');
            } elseif ($request->sort == 'name_desc') {
                $query->orderBy('Product.product_name', 'desc');
            } 
            // Sắp xếp theo Inventory
            elseif ($request->sort == 'inventory_asc') {
                $query->orderBy('Product.inventory', 'asc');
            } elseif ($request->sort == 'inventory_desc') {
                $query->orderBy('Product.inventory', 'desc');
            }
            // Sắp xếp theo Unit Price
            elseif ($request->sort == 'price_asc') {
                $query->orderBy('Product.price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('Product.price', 'desc');
            }
            // Sắp xếp theo Discount
            elseif ($request->sort == 'discount_asc') {
                $query->join('DiscountProduct', 'Product.product_id', '=', 'DiscountProduct.product_id')
                    ->orderBy('DiscountProduct.discount', 'asc');
            } elseif ($request->sort == 'discount_desc') {
                $query->join('DiscountProduct', 'Product.product_id', '=', 'DiscountProduct.product_id')
                    ->orderBy('DiscountProduct.discount', 'desc');
            }
        }

        // Sắp xếp mặc định theo ngày cập nhật giảm dần nếu không có sắp xếp khác
        $products = $query->orderBy('Product.ModifiedDate', 'desc')->paginate(10);

        return view('admin.product_management', compact('products'));
    }


    // Hiển thị form thêm sản phẩm mới
    public function create()
    {
        $catalogs = Catalog::query()
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhere('isdelete', null);
        })->get();
        $heathys = HeathyCatalog::where('isdelete', '<>', 1)
                        ->orWhereNull('isdelete')
                        ->get();
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
        $catalogs = Catalog::query()
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhere('isdelete', null);
        })->get();
        $heathys = HeathyCatalog::where('isdelete', '<>', 1)
                        ->orWhereNull('isdelete')
                        ->get();
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
        $catalogs = Catalog::query()
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhere('isdelete', null);
        })->get();
        
        $heathys = HeathyCatalog::where('isdelete', '<>', 1)
                        ->orWhereNull('isdelete')
                        ->get();
        // Logic xử lý
        return view('admin.productdetail', compact('product','catalogs','heathys'));
    }


    //Khi người dùng bấm quick view thì show thông tin sản phẩm mà không cần reload
    public function quickView(Request $request)
    {
        $productId = $request->get('product_id');

        // Lấy thông tin sản phẩm
        $product = Product::with('images', 'catalogs')->findOrFail($productId);

        // Chuẩn bị dữ liệu gửi về cho AJAX
        $data = [
            'product_name' => $product->product_name,
            'price' => $product->price,
            'describe' => $product->describe,
            'category_name' => $product->catalogs->pluck('category_name')->first(), // Lấy category đầu tiên
            'images' => $product->images->pluck('image'), // Lấy tất cả các hình ảnh liên quan đến sản phẩm
        ];

        return response()->json($data);
    }

    public function index2(Request $request)
    {
        try {
            // Logic để lấy dữ liệu sản phẩm
            $query = Product::select('Product.*')
                ->distinct()
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                        ->orWhereNull('Product.isdelete');
                });

            if ($request->has('search')) {
                $query->where('Product.product_name', 'like', '%' . $request->search . '%');
            }

            $products = $query->orderBy('Product.ModifiedDate', 'desc')->get();

            return response()->json([
                'status' => 'success',
                'data' => [
                    'products' => $products
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function index_instock(Request $request){
        $query = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) {
                    $query->where('Product.inventory', '<>', 0);
                })
                ->where(function ($query) {
                    $query->where('Product.status', '<>', 'Check Stock')
                    ->orWhereNull('Product.status');
                })
                ->orderBy('Product.inventory', 'asc');


        // Kiểm tra nếu có tìm kiếm
        if ($request->has('search')) {
            $query->where('Product.product_name', 'like', '%' . $request->search . '%');
        }

        // Xử lý sắp xếp theo các cột
        if ($request->has('sort')) {
            // Sắp xếp theo Category
            if ($request->sort == 'category_asc') {
                $query->orderBy('category_name', 'asc');
            } elseif ($request->sort == 'category_desc') {
                $query->orderBy('category_name', 'desc');
            } 
            // Sắp xếp theo Name
            elseif ($request->sort == 'name_asc') {
                $query->orderBy('Product.product_name', 'asc');
            } elseif ($request->sort == 'name_desc') {
                $query->orderBy('Product.product_name', 'desc');
            } 
            // Sắp xếp theo Inventory
            elseif ($request->sort == 'inventory_asc') {
                $query->orderBy('Product.inventory', 'asc');
            } elseif ($request->sort == 'inventory_desc') {
                $query->orderBy('Product.inventory', 'desc');
            }
            // Sắp xếp theo Unit Price
            elseif ($request->sort == 'price_asc') {
                $query->orderBy('Product.price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('Product.price', 'desc');
            }
        }

        // Sắp xếp mặc định theo ngày cập nhật giảm dần nếu không có sắp xếp khác
        $products = $query->orderBy('Product.ModifiedDate', 'desc')->paginate(10);
        return view('admin.instocklist', compact('products'));
    }

    public function index_outstock(Request $request){
        $query = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) {
                    $query->where('Product.inventory', 0)
                    ->orWhereNull('Product.inventory');
                })
                ->where(function ($query) {
                    $query->where('Product.status', '<>', 'Check Stock')
                    ->orWhereNull('Product.status');
                });


        // Kiểm tra nếu có tìm kiếm
        if ($request->has('search')) {
            $query->where('Product.product_name', 'like', '%' . $request->search . '%');
        }

        // Xử lý sắp xếp theo các cột
        if ($request->has('sort')) {
            // Sắp xếp theo Category
            if ($request->sort == 'category_asc') {
                $query->orderBy('category_name', 'asc');
            } elseif ($request->sort == 'category_desc') {
                $query->orderBy('category_name', 'desc');
            } 
            // Sắp xếp theo Name
            elseif ($request->sort == 'name_asc') {
                $query->orderBy('Product.product_name', 'asc');
            } elseif ($request->sort == 'name_desc') {
                $query->orderBy('Product.product_name', 'desc');
            } 
            // Sắp xếp theo Inventory
            elseif ($request->sort == 'inventory_asc') {
                $query->orderBy('Product.inventory', 'asc');
            } elseif ($request->sort == 'inventory_desc') {
                $query->orderBy('Product.inventory', 'desc');
            }
            // Sắp xếp theo Unit Price
            elseif ($request->sort == 'price_asc') {
                $query->orderBy('Product.price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('Product.price', 'desc');
            }
        }

        // Sắp xếp mặc định theo ngày cập nhật giảm dần nếu không có sắp xếp khác
        $products = $query->orderBy('Product.ModifiedDate', 'desc')->paginate(10);
        return view('admin.outstocklist', compact('products'));
    }

    public function index_stockcheck(Request $request){
        $query = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) {
                    $query->where('Product.status', 'Check Stock');
                });


        // Kiểm tra nếu có tìm kiếm
        if ($request->has('search')) {
            $query->where('Product.product_name', 'like', '%' . $request->search . '%');
        }

        // Xử lý sắp xếp theo các cột
        if ($request->has('sort')) {
            // Sắp xếp theo Category
            if ($request->sort == 'category_asc') {
                $query->orderBy('category_name', 'asc');
            } elseif ($request->sort == 'category_desc') {
                $query->orderBy('category_name', 'desc');
            } 
            // Sắp xếp theo Name
            elseif ($request->sort == 'name_asc') {
                $query->orderBy('Product.product_name', 'asc');
            } elseif ($request->sort == 'name_desc') {
                $query->orderBy('Product.product_name', 'desc');
            } 
            // Sắp xếp theo Inventory
            elseif ($request->sort == 'inventory_asc') {
                $query->orderBy('Product.inventory', 'asc');
            } elseif ($request->sort == 'inventory_desc') {
                $query->orderBy('Product.inventory', 'desc');
            }
            // Sắp xếp theo Unit Price
            elseif ($request->sort == 'price_asc') {
                $query->orderBy('Product.price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('Product.price', 'desc');
            }
        }

        // Sắp xếp mặc định theo ngày cập nhật giảm dần nếu không có sắp xếp khác
        $products = $query->orderBy('Product.ModifiedDate', 'desc')->paginate(10);
        return view('admin.stockcheck', compact('products'));
    }
    public function goto_stockin(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->status = "Check Stock";
        $product->save();

        // Redirect về trang hiện tại
        return redirect()->back()->with('success', 'Product status updated to Check Stock');

    }

    public function goallquanlity_stockin(Request $request){
        $products = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) use ($request) {
                    $query->where('Product.inventory', $request->quantityInput);
                })
                ->where(function ($query) {
                    $query->where('Product.status', '<>', 'Check Stock')
                    ->orWhereNull('Product.status');
                })->get();

        foreach ($products as $product) {
            $product->status = "Check Stock";
            $product->save();
        }
        
        // Redirect về trang hiện tại
        return redirect()->back()->with('success', 'Product status updated to Check Stock');

    }

    public function goallto_stockin(){
        
        $products = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                        ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) {
                    $query->where('Product.inventory', 0)
                    ->orWhereNull('Product.inventory');
                })
                ->where(function ($query) {
                    $query->where('Product.status', '<>', 'Check Stock')
                    ->orWhereNull('Product.status');
                })->get();

        foreach ($products as $product) {
            $product->status = "Check Stock";
            $product->save();
        }

        // Redirect về trang hiện tại
        return redirect()->back()->with('success', 'Product status updated to Check Stock');

    }

    public function stockin_byid(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->inventory += $request->quantity_stockin;
        $product->status = "";
        $product->save();
        // Redirect về trang hiện tại
        return redirect()->back()->withInput(); // Giữ lại dữ liệu qua request khi reload trang
    }

    public function stockin_all(Request $request){
        $products = Product::select('Product.*')
                ->distinct()  // Loại bỏ các bản ghi trùng lặp
                ->join('LinkCatalogProduct', 'Product.product_id', '=', 'LinkCatalogProduct.product_id')
                ->join('Category', 'LinkCatalogProduct.category_id', '=', 'Category.category_id')
                ->where(function ($query) {
                    $query->where('Product.isdelete', '<>', 1)
                          ->orWhereNull('Product.isdelete');
                })
                ->where(function ($query) {
                    $query->where('Product.status', 'Check Stock');
                })->get();
        foreach ($products as $product) {
            $product->inventory += $request->quanlity_stockin;
            $product->status = "";
            $product->save();
        }
        // Redirect về trang hiện tại
        return redirect()->back()->withInput(); // Giữ lại dữ liệu qua request khi reload trang
    }

    public function stockin_cancel(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->status = "";
        $product->save();
        // Redirect về trang hiện tại
        return redirect()->back()->withInput(); // Giữ lại dữ liệu qua request khi reload trang
    }
}
