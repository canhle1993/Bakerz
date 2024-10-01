<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{
    public function index(Request $request)
    {
        $query = Discount::where('isdelete', '<>', 1)
                        ->orWhereNull('isdelete');

        // Nếu có tham số tìm kiếm
        if ($request->has('search')) {
            $query->where('promotion_name', 'like', '%' . $request->search . '%');
        }

        $discounts = $query->orderBy('ModifiedDate', 'desc')->paginate(5);

        return view('admin.discountlist', compact('discounts'));
    }


    
    public function store(Request $request)
    {
        
        $discount = new Discount();

        $request->validate([
            'new_promotion_name'=> 'required|string|max:255',
            'new_start_date'=> 'required',
            'new_end_date'=> 'required',
            'new_discount'=> 'required|numeric|min:1|max:100',
        ]);
        $discountPrice = $request->input('new_discount') / 100;
        $discount->promotion_name = $request->input('new_promotion_name');
        $discount->start_date = $request->input('new_start_date');
        $discount->end_date = $request->input('new_end_date');
        $discount->discount = $discountPrice;
        $discount->CreatedBy = Auth::user()->id ?? null;
        $discount->save();

        return redirect()->route('discount.index')->with('success', 'Product added successfully');
    }


    public function update(Request $request, $id)
    {
        
        $discount = Discount::findOrFail($id);
        $request->validate([
            'promotion_name'=> 'required|string|max:255',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'discount'=> 'required|min:1|max:100',
        ]);
        $discountPrice = $request->input('discount') / 100;
        $discount->promotion_name = $request->input('promotion_name');
        $discount->start_date = $request->input('start_date');
        $discount->end_date = $request->input('end_date');
        $discount->discount = $discountPrice;
        $discount->CreatedBy = Auth::user()->id ?? null;
        $discount->save();

        return redirect()->route('discount.index')->with('success', 'Product added successfully');
    }

    public function destroy($id)
    {
        $discount = Discount::findOrFail($id);

        // Đánh dấu sản phẩm là đã xóa (isdelete = 1)
        $discount->update([
            'isdelete' => 1,
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);
        $discount->products()->detach();

        return redirect()->route('discount.index')->with('success', 'Product added successfully');
    }

    public function setup($id, Request $request)
    {
        // Thêm tìm kiếm theo tên sản phẩm
        $query = Product::query()
            ->where(function ($query) {
                $query->where('isdelete', '<>', 1)
                    ->orWhereNull('isdelete');
            })
            ->whereDoesntHave('discounts', function ($query) use ($id) {
                $query->where('discountproduct.discount_id', $id);
            });

        // Nếu có tham số tìm kiếm
        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        $products = $query->orderBy('ModifiedDate', 'desc')->paginate(10);

        // Lấy danh sách sản phẩm đã có discount
        $prodiscounts = Product::query()
            ->where(function ($query) {
                $query->where('isdelete', '<>', 1)
                    ->orWhereNull('isdelete');
            })
            ->whereHas('discounts', function ($query) use ($id) {
                $query->where('discountproduct.discount_id', $id);
            })
            ->get();

        $discount = Discount::findOrFail($id);

        return view('admin.discountsetup', compact('prodiscounts', 'products', 'id', 'discount'));
    }



    public function update_discount($productid, $discountid)
    {
        
        $discount = Discount::findOrFail($discountid);
        
        $product = Product::findOrFail($productid);

        $product->discounts()->syncWithoutDetaching([
            $discountid => [
                'start_date' => $discount->start_date,  // Ngày start
                'end_date' => $discount->end_date, // Ngày kết thúc
                'discount' => $discount->discount, // Giá
            ]
        ]);
        
        // Chuyển hướng về route 'discount.setup' với cả productid và discountid
        return redirect()->route('discount.setup', ['discount' => $discountid])
        ->with('success', 'Discount updated successfully');
    }

    public function destroy_discount($productid, $discountid)
    {
        $discount = Discount::findOrFail($discountid);
        // Tìm sản phẩm
        $product = Product::findOrFail($productid);
        
        // Sử dụng detach để xóa liên kết giữa sản phẩm và discount
        $product->discounts()->detach($discountid);
        
        // Chuyển hướng lại với thông báo thành công
        return redirect()->route('discount.setup', ['discount' => $discountid])
        ->with('success', 'Discount updated successfully');
    }
}
