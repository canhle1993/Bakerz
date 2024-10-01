<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeathyCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeathyController extends Controller
{
    public function index(Request $request)
    {
        $query = HeathyCatalog::where('isdelete', '<>', 1)
                            ->orWhereNull('isdelete');

        // Nếu có tham số tìm kiếm
        if ($request->has('search')) {
            $query->where('heath_catalog', 'like', '%' . $request->search . '%');
        }

        $heathies = $query->orderBy('ModifiedDate', 'desc')->paginate(5);

        return view('admin.heathylist', compact('heathies'));
    }


    public function store(Request $request)
    {
        
        $heathy = new HeathyCatalog();

        $request->validate([
            'new_heath_catalog'=> 'required|string|max:255',
        ]);
        $heathy->heath_catalog = $request->input('new_heath_catalog');
        $heathy->CreatedBy = Auth::user()->id ?? null;
        $heathy->save();

        return redirect()->route('heathy.index')->with('success', 'Product added successfully');
    }


    public function update(Request $request, $id)
    {

        $heathy = HeathyCatalog::findOrFail($id);

        $request->validate([
            'heath_catalog'=> 'required|string|max:255',
        ]);

        $heathy->heath_catalog = $request->input('heath_catalog');
        $heathy->ModifiedBy = Auth::user()->id ?? null;

        $heathy->save();

        return redirect()->route('heathy.index')->with('success', 'Product added successfully');
    }

    public function destroy($id)
    {
        $heathy = HeathyCatalog::findOrFail($id);

        // Đánh dấu sản phẩm là đã xóa (isdelete = 1)
        $heathy->update([
            'isdelete' => 1,
            'ModifiedBy' => Auth::user()->id ?? null,
        ]);

        return redirect()->route('heathy.index')->with('success', 'Product added successfully');
    }

}
