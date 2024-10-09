<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    // Hiển thị danh sách các category
    public function index(Request $request)
    {
        $query = Banner::where('isdelete', '<>', 1);

        // Nếu có tham số tìm kiếm
        if ($request->has('search')) {
            $query->where('title1', 'like', '%' . $request->search . '%')
                ->orwhere('title2', 'like', '%' . $request->search . '%');
        }

        $banners = $query->orderBy('ModifiedDate', 'desc')->paginate(5);

        return view('admin.banner.bannerlist', compact('banners'));
    }

    public function store(Request $request)
    {
        
        $banner = new Banner();

        $request->validate([
            'image_banner'=> 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'image_product' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
            'title1' => 'required|string|max:255',
            'title2' => 'nullable|string|max:255',
            'product_id' => 'required|string|max:255',
        ]);
        
        if ($request->hasFile('image_banner')) {
            $file = $request->file('image_banner');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('banners', $filename, 'public');
            $banner->image_banner = $filename;
        }

        if ($request->hasFile('image_product')) {
            $file = $request->file('image_product');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('banners', $filename, 'public');
            $banner->image_product = $filename;
        }
        $banner->title1 = $request->title1;
        $banner->title2 = $request->title2;
        $banner->product_id = $request->product_id;
        $banner->description = $request->description;
        $banner->CreatedBy = Auth::user()->id ?? null;
        $banner->save();

        return response()->json([
            'status' => 'success',
        ]);
    }


    public function update(Request $request, $id)
    {

        $banner = Banner::findOrFail($id);

        $request->validate([
            'title1' => 'required|string|max:255',
            'title2' => 'nullable|string|max:255',
            'product_id' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image_banner')) {
            $file = $request->file('image_banner');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('banners', $filename, 'public');
            $banner->image_banner = $filename;
        }

        if ($request->hasFile('image_product')) {
            $file = $request->file('image_product');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('banners', $filename, 'public');
            $banner->image_product = $filename;
        }
        $banner->title1 = $request->title1;
        $banner->title2 = $request->title2;
        $banner->product_id = $request->product_id;
        $banner->description = $request->description;
        $banner->ModifiedBy = Auth::user()->id ?? null;
        $banner->save();

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Đánh dấu sản phẩm là đã xóa (isdelete = 1)
        $banner->update([
            'isdelete' => 1,
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);

        return redirect()->route('banner.index')->with('success', 'Product added successfully');
    }

}
