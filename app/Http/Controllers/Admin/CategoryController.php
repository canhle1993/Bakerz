<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // Hiển thị danh sách các category
    public function index()
    {
        $catalogs = Catalog::where('isdelete', '<>', 1)
                   ->orWhereNull('isdelete')
                   ->paginate(5);
        return view('admin.catagorylist', compact('catalogs'));
    }

    public function update(Request $request, $id)
    {
        
        $catalog = Catalog::findOrFail($id);

        $request->validate([
            'category_name'=> 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $catalog->category_name = $request->input('category_name');
        $catalog->ModifiedBy = Auth::user()->id ?? null;

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('catalogs', $filename, 'public');
            $catalog->image = $filename;
        }
        $catalog->save();

        return redirect()->route('catalog.index')->with('success', 'Product added successfully');
    }

    public function destroy($id)
    {
        $catalog = Catalog::findOrFail($id);

        // Đánh dấu sản phẩm là đã xóa (isdelete = 1)
        $catalog->update([
            'isdelete' => 1,
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);

        return redirect()->route('catalog.index')->with('success', 'Product added successfully');
    }

}
