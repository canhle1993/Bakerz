<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DealOfTheDay;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DealOfTheDayController extends Controller
{
    public function index()
{
    // Lấy tất cả các Deal từ bảng deal_of_the_day
    $deals = DealOfTheDay::where('isdelete', 0)->get();

    // Lấy danh sách tất cả các sản phẩm để hiển thị trong form thêm/sửa
    $products = Product::all();

    // Trả về view và truyền dữ liệu deals và products sang view
    return view('admin.deal_of_the_day', compact('deals', 'products'));
}


    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'promotion_date' => 'required|date',
            'price' => 'required',
            'product_id' => 'required|exists:product,product_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.deal.index');
        }

        // Xử lý upload ảnh
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('deals', 'public'); // Lưu ảnh vào public/storage/deals
        } else {
            $imagePath = null;
        }

        // Tạo Deal mới
        DealOfTheDay::create([
            'image' => $imagePath,
            'name' => $request->name,
            'promotion_date' => $request->promotion_date,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'isdelete' => 0,
        ]);

        return redirect()->route('admin.deal.index');
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu nhập vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'promotion_date' => 'required|date',
            'price' => 'required',
            'product_id' => 'required|exists:product,product_id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.deal.index');
        }

        $deal = DealOfTheDay::find($id);
        if (!$deal) {
            return redirect()->route('admin.deal.index');
        }

        // Xử lý upload ảnh nếu có
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($deal->image && Storage::disk('public')->exists($deal->image)) {
                Storage::disk('public')->delete($deal->image);
            }
            $imagePath = $request->file('image')->store('deals', 'public'); // Lưu ảnh mới vào public/storage/deals
            $deal->image = $imagePath;
        }

        // Cập nhật các trường khác
        $deal->name = $request->name;
        $deal->promotion_date = $request->promotion_date;
        $deal->price = $request->price;
        $deal->product_id = $request->product_id;
        $deal->save();

        return redirect()->route('admin.deal.index');
    }

    public function destroy(Request $request, $id)
    {
        
        $deal = DealOfTheDay::find($id);
        if (!$deal) {
            return redirect()->route('admin.deal.index');
        }

        // Đánh dấu là đã xóa thay vì xóa thật
        $deal->isdelete = 1;
        $deal->save();

        // Xóa ảnh nếu tồn tại
        if ($deal->image && Storage::disk('public')->exists($deal->image)) {
            Storage::disk('public')->delete($deal->image);
        }

        return redirect()->route('admin.deal.index');
    }

    public function getDealOfTheDay()
    {
        // Lấy tất cả các Deal không bị xóa
        $deals = DealOfTheDay::where('isdelete', 0)->get();
    
        // Trả về view 'client.home' và truyền dữ liệu deals
        return view('client.home', ['deals' => $deals]);
    }
    

}
