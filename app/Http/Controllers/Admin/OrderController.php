<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Hiển thị danh sách đơn hàng
    public function pending()
    {
        $orders = Order::where('status', 'Pending')->orderBy('ModifiedDate', 'desc')->paginate(10);
        return view('admin.orders.pending', compact('orders'));
    }

    public function gotoPaid($orderid)
    {
        $order = Order::where('order_id', $orderid)->first();
        $order->status = "Paid";
        $order->save();
        return redirect()->route('order.pending');
    }

    // Hiển thị danh sách đơn hàng
    public function paid()
    {
        $orders = Order::where('status', 'Paid')->orderBy('ModifiedDate', 'desc')->paginate(10);
        return view('admin.orders.paid', compact('orders'));
    }

    public function gotoConfirmed($orderid)
    {
        $order = Order::where('order_id', $orderid)->first();
        $order->status = "Confirmed";
        $order->save();
        return redirect()->route('order.paid');
    }

    // Hiển thị danh sách đơn hàng
    public function confirmed()
    {
        $orders = Order::where('status', 'Confirmed')->orderBy('ModifiedDate', 'desc')->paginate(10);
        return view('admin.orders.confirmed', compact('orders'));
    }

    public function gotoDelivered($orderid)
    {
        $order = Order::where('order_id', $orderid)->first();
        $order->status = "Delivered";
        $order->save();

        $user = User::where('user_id', $order->user_id)->first();
        $orderdetails = OrderDetails::where('order_id', $orderid)->get();
        $total = 0;
        foreach ($orderdetails as $item) {
            $total += ($item['quantity'] * $item['discount']);
        }        
        $user->score += floor($total/10);
        // Xác định rank của user
        switch (true) {
            case ($user->score >= 100 && $user->score < 500):  // Rank Vàng
                $rank = 'Gold';
                break;

            case ($user->score >= 500):  // Rank Kim Cương
                $rank = 'Diamond';
                break;

            default:
                $rank = 'Bronze';
                break;
        }
        // Cập nhật rank cho user
        $user->rank = $rank;
        $user->save();
        return redirect()->route('order.confirmed');
    }

    // Hiển thị danh sách đơn hàng
    public function delivered()
    {
        $orders = Order::where('status', 'Delivered')->orderBy('ModifiedDate', 'desc')->paginate(10);
        return view('admin.orders.delivered', compact('orders'));
    }

    // Hiển thị danh sách đơn hàng
    public function cancel()
    {
        $orders = Order::where('status', 'Cancel')->orderBy('ModifiedDate', 'desc')->paginate(10);
        return view('admin.orders.cancel', compact('orders'));
    }

    public function gotoCancel($orderid)
    {
        $order = Order::where('order_id', $orderid)->first();
        $order->status = "Cancel";
        $order->save();
        return redirect()->route('order.cancel');
    }
}
