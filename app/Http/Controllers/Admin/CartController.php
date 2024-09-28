<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'product_id' => 'required|exists:product,product_id',
        ]);

        // Tìm sản phẩm theo product_id
        $product = Product::findOrFail($request->product_id);

        // Lưu sản phẩm vào giỏ hàng (giả sử bạn lưu trữ giỏ hàng trong session)
        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        if (isset($cart[$product->product_id])) {
            $cart[$product->product_id]['quantity']++;
        } else {
            // Nếu chưa có, thêm mới vào giỏ hàng
            $cart[$product->product_id] = [
                'name' => $product->product_name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }

        // Cập nhật lại giỏ hàng vào session
        session()->put('cart', $cart);

        return response()->json(['message' => 'Product added to cart successfully!']);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);

                // Tính lại tổng giỏ hàng sau khi xóa sản phẩm
                $total = array_reduce($cart, function($carry, $item) {
                    return $carry + ($item['price'] * $item['quantity']);
                }, 0);

                return response()->json(['message' => 'Product removed successfully', 'total' => number_format($total, 2)]);
            }

            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json(['message' => 'Invalid request'], 400);
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');

            // Kiểm tra nếu sản phẩm có trong giỏ hàng không
            if (isset($cart[$request->id])) {
                // Cập nhật số lượng sản phẩm trong giỏ hàng
                $cart[$request->id]['quantity'] = $request->quantity;

                session()->put('cart', $cart); // Cập nhật lại session giỏ hàng

                // Tính toán subtotal và total
                $subtotal = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];
                $total = array_reduce($cart, function($carry, $item) {
                    return $carry + ($item['price'] * $item['quantity']);
                }, 0);

                // Trả về kết quả mới
                return response()->json([
                    'subtotal' => number_format($subtotal, 2),
                    'total' => number_format($total, 2)
                ]);
            } else {
                return response()->json(['message' => 'Product not found in cart'], 404);
            }
        }

        return response()->json(['message' => 'Invalid request'], 400);
    }
    
    public function new_addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Giá trị mặc định là 1 nếu không truyền
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        // Kiểm tra nếu sản phẩm tồn tại
        $product = Product::find($product_id);
        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = Cart::where('user_id', $currentUser->user_id)
                        ->where('product_id', $product_id)
                        ->first();

        if ($cartItem) {
            // Nếu sản phẩm đã có, tăng số lượng
            if ($quantity < $product->inventory){
                $cartItem->quantity += $quantity;
            }
            $cartItem->save();
        } else {
            // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
            Cart::create([
                'user_id' => $currentUser->user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }

        $this->getsession();

        return response()->json(['status' => 'success', 'message' => 'Product added to cart']);
    }

    public function showCart()
    {
        
        $cart = session()->get('cart', []);
        $cart_html = view('client.shop.others.cartpartials', compact('cart'))->render(); // Tạo HTML từ view
        $cart_html2 = view('client.shop.others.cartdetail', compact('cart'))->render(); // Tạo HTML từ view
        // Tính tổng số lượng sản phẩm trong giỏ hàng
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }

        return response()->json(['cart_html' => $cart_html, 'cart_html2' => $cart_html2, 'cart_quantity'=> $totalQuantity]);
    }

    // Update số lượng
    public function update_quantity(Request $request, $product_id)
    {
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        $cartItem = Cart::where('user_id', $currentUser->user_id)
                    ->where('product_id', $product_id)
                    ->first(); // Lấy đối tượng cụ thể

        if ($cartItem) {
            $cartItem->quantity = $request->quantity; // Cập nhật số lượng
            $cartItem->save(); // Lưu lại thông tin đã thay đổi
        } else {
            return response()->json(['status' => 'error', 'message' => 'Product not found in cart'], 404);
        }

        $this->getsession();

        return response()->json(['status' => 'success', 'message' => 'Product is updated ']);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function deleteCart(Request $request, $product_id)
    {
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        Cart::where('user_id', $currentUser->user_id)
        ->where('product_id', $product_id)
        ->delete();

        $this->getsession();
        return response()->json(['status' => 'success', 'message' => 'Product is delete ']);
    }

    public function cart_checkout(Request $request){
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        $cartItems = Cart::with('product')->where('user_id', $currentUser->user_id)->get();
        DB::beginTransaction(); // Start transaction to ensure atomicity
        $total = 0;
        foreach ($cartItems as $item) {
            $total += ($item['quantity'] * $item->product->getDiscountedPrice());
        }
        try {
            // Create a new order entry in the orders table
            $order = Order::create([
                'user_id' => $currentUser->user_id,
                'total' => $total,
                // 'discount' => $request->discount,
                'pay' => $total - ($request->discount ?? 0),
                'purchase_date' => Carbon::now(),
                'status' => 'Pending', 
                'delivery_address' => $request->delivery_address,
                'delivery_phone' => $request->delivery_phone,
                'delivery_fee' => $request->delivery_fee ?? 0, // Add delivery fee if any
                'isdelete' => 0, // Active item, not deleted
            ]);

            // Insert each cart item into the orderdetails table
            foreach ($cartItems as $item) {
                OrderDetails::create([
                    'order_id' => $order->order_id, // Use the order ID from the newly created order
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'selling_price' => $item->product->price,
                    'discount' => $item->product->getDiscountedPrice(), // Adjust this if discount logic is different
                    'purchase_date' => Carbon::now(),
                    'status' => 'Active', // Set an appropriate status
                    'isdelete' => 0, // Active item, not deleted
                ]);
            }
            Cart::where('user_id', $currentUser->user_id)->delete();
            DB::commit(); // Commit the transaction

            $this->getsession();
            return redirect()->route('client.filter');

        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction if any error occurs
            return response()->json(['status' => 'error', 'message' => 'Checkout failed: ' . $e->getMessage()]);
        }
    }

    public function getsession(){
        $currentUser = Auth::user(); // Lấy người dùng hiện tại

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

        session()->forget('cart'); // Xóa session 'cart'
        // Cập nhật lại giỏ hàng vào session
        session()->put('cart', $cart);
    }
}

