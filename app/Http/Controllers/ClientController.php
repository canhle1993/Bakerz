<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\HeathyCatalog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function home()
    
    {
        
        return redirect()->route('client.filter');
    }

    public function profile($userid)
    {
        $user= Auth::user();
      
        return view('client.profile');
    }
    
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

        $client = User::all();
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        session()->forget('cart'); // Xóa session 'cart'
        if ($currentUser){
            $cartItems = Cart::with('product')->where('user_id', $currentUser->user_id)->get();
            $cart = [];
            foreach ($cartItems as $item) {
                $cart[$item->product_id] = [
                    'name' => $item->product->product_name,
                    'quantity' => $item->quantity,
                    'price' => $item->product->getDiscountedPrice(),
                    'image' => $item->product->image,
                ];
            }
    
            // Cập nhật lại giỏ hàng vào session
            session()->put('cart', $cart);
        }
        
        $discount_products = Product::whereHas('discounts')->get();
        // Trả về toàn bộ trang 'client.heathyfilter'
        return view('client.home', compact('products', 'heathyCatalogs', 'client','discount_products'));
    }

}
