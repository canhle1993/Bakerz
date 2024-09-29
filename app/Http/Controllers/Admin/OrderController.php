<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Hiển thị danh sách đơn hàng
    public function pending()
    {
        $orders = Order::where('status', 'Pending')->orderBy('ModifiedDate', 'desc')->paginate(5);
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
        $orders = Order::where('status', 'Paid')->orderBy('ModifiedDate', 'desc')->paginate(5);
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
        $orders = Order::where('status', 'Confirmed')->orderBy('ModifiedDate', 'desc')->paginate(5);
        return view('admin.orders.confirmed', compact('orders'));
    }

    public function gotoDelivered($orderid)
    {
        $order = Order::where('order_id', $orderid)->first();
        $order->status = "Delivered";
        $order->save();
        return redirect()->route('order.confirmed');
    }

    // Hiển thị danh sách đơn hàng
    public function delivered()
    {
        $orders = Order::where('status', 'Delivered')->orderBy('ModifiedDate', 'desc')->paginate(5);
        return view('admin.orders.delivered', compact('orders'));
    }

    // Hiển thị danh sách đơn hàng
    public function cancel()
    {
        $orders = Order::where('status', 'Cancel')->orderBy('ModifiedDate', 'desc')->paginate(5);
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
