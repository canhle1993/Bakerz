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
use App\Models\Notification;


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
        $this->getsession();
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

    public function showcheckout(Request $request){
        $this->getsession();
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        $cartItems = Cart::with('product')->where('user_id', $currentUser->user_id)->get();
        if(isset($cartItems)){
            return view('client.shop.others.checkout');

        } else {
            return redirect()->route('client.filter');
        }

    }

    public function cart_checkout(Request $request){
        $currentUser = Auth::user(); // Lấy người dùng hiện tại
        $cartItems = Cart::with('product')->where('user_id', $currentUser->user_id)->get();
        $total = 0;
        $iserror = false;
        foreach ($cartItems as $item) {
            $total += ($item['quantity'] * $item->product->getDiscountedPrice());
            $request->merge([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'quantity_input' => $item['quantity']
            ]);
            $checkInventoryResponse = $this->checkinventory($request);
            $checkInventory = $checkInventoryResponse->getData(true); // true để chuyển đổi thành mảng
            if (!empty($checkInventory['error']) && $checkInventory['error'] === 'out_of_stock') {
                $iserror=true;
                $item->quantity = $checkInventory['max_quantity'];
                $item->save();
            }
        }
        if ($total == 0){
            return redirect()->route('client.profile', $currentUser->user_id);
        }
        
        if($iserror){
            return redirect()->route('client.profile', $currentUser->user_id)->with('error', 'Out of Stock');
        }

        DB::beginTransaction(); // Start transaction to ensure atomicity
        try {
            // Create a new order entry in the orders table
            $order = Order::create([
                'user_id' => $currentUser->user_id,
                'total' => $total,
                'discount' => $request->discount,
                'pay' => $total - ($request->discount ?? 0),
                'purchase_date' => Carbon::now(),
                'status' => 'Pending',
                'delivery_address' => $request->delivery_address,
                'delivery_phone' => $request->delivery_phone,
                'delivery_fee' => $request->delivery_fee ?? 0, // Add delivery fee if any
                'isdelete' => 0, // Active item, not deleted
            ]);

            Notification::create([
                'user_id' => Auth::id(),  // ID người dùng đã đặt hàng
                'order_id' => $order->id,  // ID của đơn hàng
                'is_read' => 0,  // Đánh dấu là chưa đọc
                'type' => 'order',  // Loại thông báo là order
                'message' => 'Khách hàng ' . Auth::user()->name . ' đã đặt đơn hàng mới.',  // Thông báo đặt hàng mới
                'created_at' => Carbon::now(),  // Thời gian tạo thông báo
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
                $product = Product::findOrFail($item->product_id);
                $product->inventory -= $item->quantity;
                $product->save();
            }
            Cart::where('user_id', $currentUser->user_id)->delete();            

            DB::commit(); // Commit the transaction

            $this->getsession();
            // Call VNPay
            $this->vnp($request, $order);

        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction if any error occurs
            $this->getsession();
            return redirect()->route('client.profile', $currentUser->user_id);
        }
        return redirect()->route('client.profile', $currentUser->user_id);
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


    public function vnp(Request $request, Order $order){
        $data= $request ->all();
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay.return', ['order_id' => $order->order_id]);
        $vnp_TmnCode = "OT1X2F3Y";//Mã website tại VNPAY
        $vnp_HashSecret = "S9ZGL7JWJCZRSXD605B1C01YY0S67XS8"; //Chuỗi bí mật

        $vnp_TxnRef = uniqid(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này

        $vnp_OrderInfo ="Bill Payment";
        $vnp_OrderType = "Bake Payment";
        $vnp_Amount = ($order['pay'] * 25000) * 100;
        $vnp_Locale = "vn";
        // $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    public function checkinventory(Request $request)
    {
        $currentUser = Auth::user();
        // Tìm sản phẩm theo product_id
        $product = Product::findOrFail($request->product_id);

        $cart = Cart::where('user_id', $currentUser->user_id)
                        ->where('product_id', $request->product_id)
                        ->first();
        
        
        $totalQuantity = 1;

        if (isset($request->quantity_input)) {
            $totalQuantity = $request->quantity;

        } elseif (isset($cart)) {
            $totalQuantity += $cart->quantity;
        }
        if ($totalQuantity > $product->inventory) {
            if (isset($cart) && $cart->quantity > $product->inventory) {
                // Nếu số lượng trong giỏ hàng lớn hơn tồn kho, đặt giá trị bằng tồn kho
                $setvalue = $product->inventory;
            } else {
                // Nếu không, đặt giá trị bằng tồn kho hoặc 0 nếu không có giỏ hàng
                $setvalue = $cart ? min($cart->quantity, $product->inventory) : $product->inventory;
            }
            return response()->json(['error' => 'out_of_stock', 'message' => 'Out of Stock', 'max_quantity' => $setvalue]);
        }
        
        return response()->json(['sucess' => 'success']);
    }

}