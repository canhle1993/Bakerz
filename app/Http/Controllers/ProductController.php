<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Catalog;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filterByCategory($category_id)
    {
        // Lấy danh sách các category chưa bị xóa
        $categories = Catalog::where('isdelete', '<>', 1)->get();

        // Lọc các sản phẩm theo danh mục
        $products = Product::whereHas('catalogs', function ($query) use ($category_id) {
            $query->where('linkcatalogproduct.category_id', $category_id);
        })
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
        })
        ->paginate(12); // Phân trang nếu cần

        // Trả về view shop_all với danh sách sản phẩm và danh mục
        return view('client.shop.shop_all', compact('products', 'categories'));
    }

    public function all_product(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->get('category_id');
        $paginateBy = $request->get('paginate', 12);
        $minPrice = $request->get('min_price', 0);
        $maxPrice = $request->get('max_price', 50);

        // Khởi tạo query cho sản phẩm
        $products = Product::query();

        // Tìm kiếm sản phẩm theo từ khóa
        if ($query) {
            $products->where('product_name', 'like', '%' . $query . '%');
        }

        // Lọc theo danh mục
        if ($categoryId) {
            $products->whereHas('catalogs', function ($query) use ($categoryId) {
                $query->where('linkcatalogproduct.category_id', $categoryId);
            });
        }

        // Lọc sản phẩm theo khoảng giá
        $products->whereBetween('price', [$minPrice, $maxPrice]);

        $products = $products->paginate($paginateBy);

        $categories = Catalog::where('isdelete', '<>', 1)->orWhereNull('isdelete')->get();

        return view('client.shop.shop_all', compact('products', 'categories'));
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

}
