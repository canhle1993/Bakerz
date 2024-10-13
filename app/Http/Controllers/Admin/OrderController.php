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
    public function pending(Request $request)
{
    // Lấy giá trị tìm kiếm Order ID từ request
    $searchOrderID = $request->query('searchOrderID');

    // Thêm logic tìm kiếm nếu có Order ID
    $orders = Order::where('status', 'Pending')
        ->when($searchOrderID, function ($query, $searchOrderID) {
            return $query->where('order_id', 'like', '%' . $searchOrderID . '%');
        })
        ->orderBy('ModifiedDate', 'desc')
        ->paginate(10);

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
    public function paid(Request $request)
{
    // Lấy giá trị tìm kiếm Order ID từ request
    $searchOrderID = $request->query('searchOrderID');

    // Tìm kiếm theo Order ID hoặc hiển thị toàn bộ
    $orders = Order::where('status', 'Paid')
        ->when($searchOrderID, function ($query, $searchOrderID) {
            return $query->where('order_id', 'like', '%' . $searchOrderID . '%');
        })
        ->orderBy('ModifiedDate', 'desc')
        ->paginate(10);

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
    public function confirmed(Request $request)
{
    // Lấy giá trị tìm kiếm Order ID từ request
    $searchOrderID = $request->query('searchOrderID');

    // Tìm kiếm theo Order ID hoặc hiển thị toàn bộ
    $orders = Order::where('status', 'Confirmed')
        ->when($searchOrderID, function ($query, $searchOrderID) {
            return $query->where('order_id', 'like', '%' . $searchOrderID . '%');
        })
        ->orderBy('ModifiedDate', 'desc')
        ->paginate(10);

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

            case ($user->score >= 500):  // Rank Kim Cương.
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
    public function delivered(Request $request)
{
    // Lấy giá trị tìm kiếm Order ID từ request
    $searchOrderID = $request->query('searchOrderID');

    // Tìm kiếm theo Order ID hoặc hiển thị toàn bộ
    $orders = Order::where('status', 'Delivered')
        ->when($searchOrderID, function ($query, $searchOrderID) {
            return $query->where('order_id', 'like', '%' . $searchOrderID . '%');
        })
        ->orderBy('ModifiedDate', 'desc')
        ->paginate(10);

    return view('admin.orders.delivered', compact('orders'));
}


    // Hiển thị danh sách đơn hàng
    public function cancel(Request $request)
{
    // Lấy giá trị tìm kiếm Order ID từ request
    $searchOrderID = $request->query('searchOrderID');

    // Tìm kiếm theo Order ID hoặc hiển thị toàn bộ đơn hàng đã hủy
    $orders = Order::where('status', 'Cancel')
        ->when($searchOrderID, function ($query, $searchOrderID) {
            return $query->where('order_id', 'like', '%' . $searchOrderID . '%');
        })
        ->orderBy('ModifiedDate', 'desc')
        ->paginate(10);

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
