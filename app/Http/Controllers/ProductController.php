<?php
namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function filter(Request $request)
    {
        // Lấy tất cả danh mục sức khỏe
        $heathyCatalogs = HeathyCatalog::where('isdelete', '<>', 1)
                        ->orWhereNull('isdelete')
                        ->get();

        // Lọc danh sách sản phẩm theo danh mục sức khỏe đã chọn
        $products = Product::where(function ($q) {
            // Điều kiện lọc các sản phẩm chưa bị xóa (isdelete <> 1 hoặc isdelete là null)
            $q->where('isdelete', '<>', 1)
              ->orWhereNull('isdelete');
            })->whereHas('heathyCatalogs', function ($query) use ($request) {
                // Nếu có yêu cầu lọc theo heath_id
                if ($request->has('heath_id')) {
                    $heathIds = $request->heath_id;

                    // Điều kiện AND: mỗi sản phẩm phải có đầy đủ các heath_id
                    $query->whereIn('link_product_heathy.heath_id', $heathIds)
                          ->groupBy('product_id')
                          ->havingRaw('COUNT(DISTINCT link_product_heathy.heath_id) = ?', [count($heathIds)]);
                }
            })->get();

        // Trả về toàn bộ trang 'client.heathyfilter'
        return view('client.heathyfilter', compact('products', 'heathyCatalogs','heathIds'));
    }


    public function all_product(Request $request)
    {
        $sort = $request->get('sort', 'price-ascending');
        $query = $request->input('query');
        $categoryId = $request->get('category_id');
        $paginateBy = $request->get('paginate', 12);
        $minPrice = $request->get('min_price', 0);
        $maxPrice = $request->get('max_price', 50);
        // Khởi tạo query cho sản phẩm
        $products = Product::query();

        // Lọc những sản phẩm không bị xóa
        $products->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
        });

        // Tìm kiếm sản phẩm theo từ khóa
        if ($query) {
            $products->where('product_name', 'like', '%' . $query . '%');
        }

        // Lọc theo danh mục nếu có
        if ($categoryId) {
            $products->whereHas('catalogs', function ($query) use ($categoryId) {
                $query->where('linkcatalogproduct.category_id', $categoryId);
            });
        }

        // Lọc sản phẩm theo khoảng giá
        $products->whereBetween('price', [$minPrice, $maxPrice]);

        // Sắp xếp sản phẩm
        if ($sort == 'price-ascending') {
            $products->orderBy('price', 'asc');
        } elseif ($sort == 'price-descending') {
            $products->orderBy('price', 'desc');
        }

        // Phân trang sản phẩm dựa trên lựa chọn người dùng
        $products = $products->paginate($paginateBy)->appends([
            'query' => $query,
            'sort' => $sort,
            'category_id' => $categoryId,
            'paginate' => $paginateBy,
            'min_price' => $minPrice,
            'max_price' => $maxPrice,
        ]);


        // Lấy danh sách tất cả các danh mục
        $categories = Catalog::where(function ($query) {
            $query->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
        })->get();

        return view('client.shop.shop_all', [
            'products' => $products,
            'categories' => $categories,
            'query' => $query,
        ]);
    }

    public function filter_nonCatagory(Request $request, $isOption){
        // Heathy
        if ($isOption == 1){
            $products = Product::where(function ($q) {
                // Điều kiện lọc các sản phẩm chưa bị xóa (isdelete <> 1 hoặc isdelete là null)
                $q->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
                })->whereHas('heathyCatalogs', function ($query) use ($request) {
                    // Nếu có yêu cầu lọc theo heath_id
                    if ($request->has('heathyIds') && !blank($request->heathyIds)) {
                        $heathIds = explode(',', $request->heathyIds);
    
                        // Điều kiện AND: mỗi sản phẩm phải có đầy đủ các heath_id
                        $query->whereIn('link_product_heathy.heath_id', $heathIds)
                              ->groupBy('product_id')
                              ->havingRaw('COUNT(DISTINCT link_product_heathy.heath_id) = ?', [count($heathIds)]);
                            }
                })->paginate(12);
                
        } elseif ($isOption==2){
            $userId = Auth::user()->user_id;
            $products = Product::join('orderdetails', 'product.product_id', '=', 'orderdetails.product_id')
                ->join('order', 'orderdetails.order_id', '=', 'order.order_id')
                ->where('order.user_id', $userId)
                ->select('product.product_id', 'product.product_name', 'product.price', 'product.image', DB::raw('MAX(order.order_id) as latest_order_id'))
                ->groupBy('product.product_id', 'product.product_name', 'product.price', 'product.image')
                ->orderBy('latest_order_id', 'desc')
                    ->paginate(12);
        } elseif ($isOption==3){
            $products = Product::whereHas('discounts')
                    ->paginate(12);
        } else {
            $products = Product::join('orderdetails', 'product.product_id', '=', 'orderdetails.product_id')
                ->select('product.product_id', 'product.product_name', 'product.price', 'product.image', DB::raw('SUM(orderdetails.quantity) as total_quantity'))
                ->groupBy('product.product_id', 'product.product_name', 'product.price', 'product.image')
                ->orderBy('total_quantity', 'desc')
                ->paginate(12);
        }
        // Lấy danh sách tất cả các danh mục
        $categories = Catalog::where(function ($query) {
            $query->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
        })->get();

        return view('client.shop.shop_all', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
    //Chức năng xử lý trả sản phẩm khi client bấm vào danh mục
    public function filterByCategory($category_id)
    {
        // Tìm danh mục dựa trên category_id
        $category = Catalog::find($category_id);

        // Nếu không tìm thấy danh mục, chuyển hướng về trang tất cả sản phẩm
        if (!$category) {
            return redirect()->route('shop_all');
        }

        // Lọc các sản phẩm theo danh mục
        $products = Product::whereHas('catalogs', function ($query) use ($category_id) {
            $query->where('linkcatalogproduct.category_id', $category_id);
        })
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhereNull('isdelete');
        })
        ->paginate(12); // Phân trang nếu cần

        // Lấy tất cả các danh mục để hiển thị
        $categories = Catalog::where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhereNull('isdelete');
        })->get();

        // Trả về view shop_all với danh sách sản phẩm lọc theo danh mục
        return view('client.shop.shop_all', compact('products', 'categories', 'category'));
    }

    public function getProductDetails($id)
    {
        $product = Product::with('images', 'discounts', 'catalogs')->find($id);

        if ($product) {
            $discountedPrice = $product->getDiscountedPrice();
            return response()->json([
                'status' => 'success',
                'product' => $product,
                'discounted_price' => $discountedPrice // Trả về giá đã giảm
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found'
            ]);
        }
    }

    public function singleProduct($id)
    {
        // Tìm sản phẩm dựa trên product_id
        $product = Product::with('reviews', 'catalogs')->findOrFail($id);

        // Lấy danh sách sản phẩm liên quan cùng danh mục
        $relatedProducts = Product::whereHas('catalogs', function ($query) use ($product) {
            $query->whereIn('category.category_id', $product->catalogs->pluck('category_id')); // Chỉ định rõ ràng bảng 'category'
        })
        ->where('product.product_id', '<>', $product->product_id) // Loại bỏ sản phẩm hiện tại khỏi danh sách
        ->take(5) // Giới hạn số lượng sản phẩm hiển thị
        ->get();

        // Trả về view và truyền dữ liệu sản phẩm vào
        return view('client.shop.product-types.single-product', compact('product', 'relatedProducts'));
    }
    public function filterByCoffee()
    {
        // Lấy danh mục "Coffee & Espresso"
        $coffeeCatalog = Catalog::where('category_name', 'Coffee & Espresso')->first();

        // Nếu không tìm thấy danh mục, chuyển hướng về trang tất cả sản phẩm
        if (!$coffeeCatalog) {
            return redirect()->route('shop_all');
        }

        // Lọc các sản phẩm theo danh mục
        $products = Product::whereHas('catalogs', function ($query) {
            $query->where('category_name', 'Coffee & Espresso');
        })
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhereNull('isdelete');
        })
        ->paginate(12); // Phân trang nếu cần

        // Lấy tất cả các danh mục để hiển thị
        $categories = Catalog::where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhereNull('isdelete');
        })->get();

        // Trả về view shop_all với danh sách sản phẩm lọc theo danh mục
        return view('client.shop.shop_all', compact('products', 'categories', 'coffeeCatalog'));
    }

    //Hàm xử lý thả tim cho sản phẩm để sản phẩm vào trong trang wishlist
    public function addToWishlist(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            return response()->json(['status' => 'error', 'message' => 'You must be logged in to add to wishlist']);
        }
    
        // Lấy ID sản phẩm và user
        $product_id = $request->input('product_id');
        $user_id = Auth::user()->user_id;  // Lấy ID của user hiện tại
    
        // Kiểm tra xem sản phẩm đã có trong wishlist chưa
        $exists = Wishlist::where('product_id', $product_id)
                          ->where('user_id', $user_id)
                          ->exists();
    
        if (!$exists) {
            // Thêm sản phẩm vào wishlist
            Wishlist::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);
            return response()->json(['status' => 'success', 'message' => 'Added to wishlist']);
        }
    
        return response()->json(['status' => 'error', 'message' => 'Product already in wishlist']);
    }
    

    //Show thông tin sản phẩm được tim qua trang wishlist
    public function showWishlist()
    {
        $user_id = Auth::user()->user_id;  // Lấy ID user hiện tại

        // Lấy danh sách sản phẩm trong wishlist của user hiện tại
        $wishlistItems = Wishlist::with('product')
                        ->where('user_id', $user_id)
                        ->get();

        return view('client.shop.others.wishlist', ['wishlistItems' => $wishlistItems]);
    }

    //Xóa sản phẩm trong wishlist
    public function removeFromWishlist(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = Auth::user()->user_id;  // Lấy ID của user hiện tại
        
        // Xóa sản phẩm khỏi wishlist dựa trên user_id và product_id
        Wishlist::where('user_id', $user_id)
        ->where('product_id', $product_id)
        ->delete();

        return response()->json(['status' => 'success', 'message' => 'Product removed from wishlist']);
    }


}
