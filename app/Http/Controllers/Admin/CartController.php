<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

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
}
