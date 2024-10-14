<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkshopController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        // Truy vấn tìm kiếm và phân trang
        $workshops = Workshop::where('isdelete', 0) // Chỉ lấy những workshop chưa bị xóa
            ->when($search, function ($query, $search) {
                return $query->whereHas('user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
                })->orWhere('product', 'like', '%' . $search . '%');
            })
            ->orderBy('CreatedDate', 'desc') // Sắp xếp theo ngày mới nhất
            ->paginate(10); // Phân trang với 10 bản ghi mỗi trang
    
        return view('admin.workshop', compact('workshops'));
    }

    // Xử lý khi người dùng đăng ký workshop
    public function registerWorkshop(Request $request)
    {
        $user = Auth::user(); // Lấy thông tin người dùng đang đăng nhập
        $product = $request->input('product'); // Lấy tên sản phẩm từ form

        if (!isset($user) || $user->rank <> "Diamond"){
            return redirect()->route('blog-detail')->with('iserror', 'This feature is only available for Diamond rank accounts!');
        }
        // Kiểm tra xem người dùng đã đăng ký workshop với trạng thái "Pending" hay chưa
        $existingRegistration = Workshop::where('user_id', $user->user_id)
        ->where('status', 'Pending') // Tìm kiếm theo trạng thái "Pending"
        ->where('product', $product) // Kiểm tra sản phẩm đã đăng ký
        ->first();

        if($existingRegistration){
            return redirect()->route('blog-detail')->with('iserror', 'You have already registered this workshop and it is pending!');
        }

        // Tạo bản ghi workshop mới
        Workshop::create([
            'user_id' => $user->user_id,
            'product' => $product,
            'status' => 'Pending', // Trạng thái ban đầu là 'Pending'
            'isdelete' => 0,
            'CreatedDate' => now(),
            'CreatedBy' => $user->name,
        ]);

        
        return redirect()->route('blog-detail')->with('isdone', 'Successfully registered for the workshop.');
    }

    // Phê duyệt đăng ký workshop
    public function approve($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->status = 'Approved';
        $workshop->save();

        return redirect()->route('admin.workshop.index')->with('success', 'Workshop approved.');
    }

    // Hủy bỏ đăng ký workshop
    public function cancel($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->status = 'Cancelled';
        $workshop->save();

        return redirect()->route('admin.workshop.index')->with('success', 'Workshop cancelled.');
    }

    // Xóa đăng ký workshop (đánh dấu isdelete = 1)
    public function delete($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->isdelete = 1;
        $workshop->save();

        return redirect()->route('admin.workshop.index')->with('success', 'Workshop deleted.');
    }
}
