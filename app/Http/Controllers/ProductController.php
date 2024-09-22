<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;
use App\Models\Category;


class ProductController extends Controller
{
    public function filter(Request $request)
    {
        // Lấy tất cả danh mục sức khỏe
        $heathyCatalogs = HeathyCatalog::all();

        // Lọc danh sách sản phẩm theo danh mục sức khỏe đã chọn
        $products = Product::whereHas('heathyCatalogs', function ($query) use ($request) {
            if ($request->has('heath_id')) {
                // Lọc các sản phẩm có liên kết với tất cả các danh mục sức khỏe đã chọn
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


    //Hiển thị toàn bộ sản phẩm, phân trang, lọc giá
    // public function all_product(Request $request)
    // {
    //     // Lấy giá trị sắp xếp từ request, mặc định là 'price-ascending'
    //     $sort = $request->get('sort', 'price-ascending');

    //     // Lấy 10 sản phẩm mỗi trang, sắp xếp theo yêu cầu
    //     $products = Product::query();

    //     if ($sort == 'price-ascending') {
    //         $products->orderBy('price', 'asc');
    //     } elseif ($sort == 'price-descending') {
    //         $products->orderBy('price', 'desc');
    //     }

    //     // Phân trang 10 sản phẩm
    //     $products = $products->paginate(10);

    //     // Trả về view và truyền dữ liệu sản phẩm
    //     return view('client.shop.shop_all', ['products' => $products]);
    // }
    public function all_product(Request $request)
    {
        // Lấy giá trị sắp xếp từ request, mặc định là 'price-ascending'
        $sort = $request->get('sort', 'price-ascending');

        // Lấy từ khóa tìm kiếm từ request (nếu có)
        $query = $request->input('query');

        // Lấy danh mục từ request (nếu có)
        $categoryId = $request->get('category_id');

        // Khởi tạo query cho sản phẩm
        $products = Product::query();

        // Kiểm tra nếu có từ khóa tìm kiếm
        if ($query) {
            // Tìm kiếm sản phẩm theo tên chứa từ khóa
            $products->where('product_name', 'like', '%' . $query . '%');
        }

        // Kiểm tra nếu có lọc theo danh mục
        if ($categoryId) {
            $products->join('linkcatalogproduct', 'product.product_id', '=', 'linkcatalogproduct.product_id')
                    ->where('linkcatalogproduct.category_id', $categoryId);
        }

        // Sắp xếp theo giá
        if ($sort == 'price-ascending') {
            $products->orderBy('price', 'asc');
        } elseif ($sort == 'price-descending') {
            $products->orderBy('price', 'desc');
        }

        // Phân trang 10 sản phẩm, đồng thời duy trì từ khóa tìm kiếm và danh mục
        $products = $products->paginate(10)->appends(['query' => $query, 'sort' => $sort, 'category_id' => $categoryId]);

        // Lấy danh sách tất cả các danh mục
        $categories = Category::all();

        // Trả về view với danh sách sản phẩm, danh mục và từ khóa tìm kiếm (nếu có)
        return view('client.shop.shop_all', ['products' => $products, 'categories' => $categories, 'query' => $query]);
    }




    //Chức năng xử lý trả sản phẩm khi client bấm vào danh mục
    public function filterByCategory($category_id)
    {
        // Lấy danh mục đã chọn
        $category = Category::find($category_id);

        if (!$category) {
            // Nếu danh mục không tồn tại, trả về tất cả sản phẩm
            return redirect()->route('shop_all');
        }

        // Lọc sản phẩm theo danh mục
        $products = Product::whereHas('catalogs', function ($query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->paginate(10);

        // Lấy tất cả danh mục để hiển thị
        $categories = Category::all();

        return view('client.shop.shop_all', compact('products', 'categories'));
    }

}
