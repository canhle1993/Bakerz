<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;

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


}
