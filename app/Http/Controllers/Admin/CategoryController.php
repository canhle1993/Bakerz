<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

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
}
