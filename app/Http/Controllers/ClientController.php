<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Catalog;
use App\Models\HeathyCatalog;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function home()
    
    {
        
        return redirect()->route('client.filter');
    }

    public function profile($userid)
    {
        // $user= Auth::user();
        // $orders = Order::with('user')
        // ->where('user_id', $user->user_id)
        // ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
        // ->get();
    
        $userId = Auth::id();

        // Lấy các đơn hàng theo từng trạng thái
        $pendingOrders = Order::where('user_id', $userId)
                      ->where('status', 'Pending')
                      ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
                      ->get();

        $paidOrders = Order::where('user_id', $userId)
                        ->where('status', 'Paid')
                        ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
                        ->get();

        $confirmedOrders = Order::where('user_id', $userId)
                                ->where('status', 'Confirmed')
                                ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
                                ->get();

        $deliveredOrders = Order::where('user_id', $userId)
                                ->where('status', 'Delivered')
                                ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
                                ->get();

        $cancelOrders = Order::where('user_id', $userId)
                            ->where('status', 'Cancel')
                            ->orderBy('order_id', 'desc') // Sắp xếp giảm dần theo order_id
                            ->get();

        return view('client.profile', compact('pendingOrders', 'paidOrders', 'confirmedOrders', 'deliveredOrders', 'cancelOrders'));

        // return view('client.profile', compact('orders'));
    }
    
    // Order Details
    public function getOrderDetails($orderId)
    {
         // Lấy thông tin đơn hàng theo ID
         $order = Order::with('orderDetails.product')->find($orderId);

         if (!$order) {
             return response()->json([
                 'status' => 'error',
                 'message' => 'Order not found'
             ], 404);
         }
 
         return response()->json([
             'status' => 'success',
             'data' => [
                 'orderDetails' => $order->orderDetails // Gửi thông tin chi tiết đơn hàng
             ]
         ]);
    }

    public function filter(Request $request)
    {
        // Lấy ID của người dùng đang đăng nhập
        $userId = Auth::id();

        // Lấy danh sách sản phẩm mà người dùng đã mua gần đây
        $recentPurchasedProducts = Product::join('orderdetails', 'product.product_id', '=', 'orderdetails.product_id')
        ->join('order', 'orderdetails.order_id', '=', 'order.order_id')
        ->where('order.user_id', $userId)
        ->select('product.product_id', 'product.product_name', 'product.price', 'product.image', DB::raw('MAX(order.order_id) as latest_order_id')) // Chọn các cột hợp lệ và sử dụng MAX() cho order_id
        ->groupBy('product.product_id', 'product.product_name', 'product.price', 'product.image') // Đảm bảo tất cả các cột được đưa vào GROUP BY
        ->orderBy('latest_order_id', 'desc') // Sắp xếp theo order_id mới nhất
        ->take(10) // Giới hạn số lượng sản phẩm
        ->get();


        // Lấy danh sách sản phẩm bán chạy nhất
        $bestSellingProducts = Product::join('orderdetails', 'product.product_id', '=', 'orderdetails.product_id')
        ->select('product.product_id', 'product.product_name', 'product.price', 'product.image', DB::raw('SUM(orderdetails.quantity) as total_quantity'))
        ->groupBy('product.product_id', 'product.product_name', 'product.price', 'product.image') // Nhóm theo các cột cần thiết
        ->orderBy('total_quantity', 'desc') // Sắp xếp theo số lượng bán giảm dần
        ->take(5) // Giới hạn số lượng sản phẩm
        ->get();



        // Lấy tất cả danh mục sức khỏe
        $heathyCatalogs = HeathyCatalog::where('isdelete', '<>', 1)
                            ->orWhereNull('isdelete')
                            ->get();

        // Lọc danh sách sản phẩm theo danh mục sức khỏe đã chọn
        $products = Product::where(function ($q) {
            $q->where('isdelete', '<>', 1)
            ->orWhereNull('isdelete');
            })->whereHas('heathyCatalogs', function ($query) use ($request) {
                if ($request->has('heath_id')) {
                    $heathIds = $request->heath_id;
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

        // BTT
        $seasonalCatalog = Catalog::where('category_name', 'Seasonal Products')->first();

        if ($seasonalCatalog) {
            // Fetch the products that belong to the "Seasonal Products" catalog
            $seasonalProducts = Product::with('catalogs') // Use lowercase 'catalog'
                ->whereHas('catalogs', function ($query) {
                    $query->where('category_name', 'Seasonal Products');
                })
                ->get();
        }      

        // Drink
        $coffeCatalog = Catalog::where('category_name', 'Coffee & Espresso')->first();

        if ($coffeCatalog) {
            // Fetch the products that belong to the "Seasonal Products" catalog
            $coffeProducts = Product::with('catalogs') // Use lowercase 'catalog'
                ->whereHas('catalogs', function ($query) {
                    $query->where('category_name', 'Coffee & Espresso');
                })
                ->get();
        }      
        // Trả về toàn bộ trang 'client.home' với danh sách các sản phẩm
        return view('client.home', compact('products', 'heathyCatalogs', 'client', 
        'discount_products', 'recentPurchasedProducts', 'bestSellingProducts','seasonalProducts','coffeProducts'));
    }

}
