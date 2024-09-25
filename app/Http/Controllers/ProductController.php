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
        // Lấy giá trị sắp xếp từ request, mặc định là 'price-ascending'
        $sort = $request->get('sort', 'price-ascending');

        // Lấy từ khóa tìm kiếm từ request (nếu có)
        $query = $request->input('query');

        // Lấy danh mục từ request (nếu có)
        $categoryId = $request->get('category_id');

        // Khởi tạo query cho sản phẩm
        $products = Product::query();

        $products->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                  ->orWhereNull('isdelete');
        });
        
        // Kiểm tra nếu có từ khóa tìm kiếm
        if ($query) {
            // Tìm kiếm sản phẩm theo tên chứa từ khóa
            $products->where('product_name', 'like', '%' . $query . '%');
        }

        // Kiểm tra nếu có lọc theo danh mục
        if ($categoryId) {
            $products->whereHas('catalogs', function ($query) use ($categoryId) {
                // Sử dụng đúng tên bảng liên kết là linkcatalogproduct
                $query->where('linkcatalogproduct.category_id', $categoryId);
            });
        }

        // Sắp xếp theo giá
        if ($sort == 'price-ascending') {
            $products->orderBy('price', 'asc');
        } elseif ($sort == 'price-descending') {
            $products->orderBy('price', 'desc');
        }

        // Phân trang 10 sản phẩm, đồng thời duy trì từ khóa tìm kiếm và danh mục
        $products = $products->paginate(12)->appends(['query' => $query, 'sort' => $sort, 'category_id' => $categoryId]);

        // Lấy danh sách tất cả các danh mục
        $categories = Catalog::query()
        ->where(function ($query) {
            $query->where('isdelete', '<>', 1)
                ->orWhere('isdelete', null);
        })
        ->get();


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
        })->paginate(12);

        // Lấy tất cả danh mục để hiển thị
        $categories = Category::where('isdelete', '<>', 1)
                    ->orWhere('isdelete', null);

        return view('client.shop.shop_all', compact('products', 'categories'));
    }

    public function showdetail($id){
        $product = Product::findOrFail($id);


        return view('client/shop/product-types/single-product', compact('product'));
    }
}
