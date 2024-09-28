<?php
namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;
use App\Models\Category;


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
        return view('client.heathyfilter', compact('products', 'heathyCatalogs'));
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
    return view('client.shop.shop_all', compact('products', 'categories'));
}




    public function getProductDetails($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    return response()->json([
        'product_id' => $product->product_id,
        'product_name' => $product->product_name,
        'price' => $product->price,
        'description' => $product->describe,
        'image' => $product->image,
    ]);
}

    public function singleProduct($id)
    {
        // Tìm sản phẩm dựa trên product_id
        $product = Product::with('reviews')->findOrFail($id);

        // Trả về view và truyền dữ liệu sản phẩm vào
        return view('client.shop.product-types.single-product', compact('product'));
    }
    public function show($product_id)
    {
        // Lấy sản phẩm cùng với các đánh giá và thông tin người dùng
        $product = Product::with(['reviews.user'])->findOrFail($product_id);
    
        // Trả về view và truyền dữ liệu
        return view('client.shop.product-types.single-product', compact('product'));
    }

}
