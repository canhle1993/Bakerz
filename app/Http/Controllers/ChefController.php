<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    // Phương thức để hiển thị danh sách đầu bếp
    public function index()
    {
         // Chỉ lấy các đầu bếp có isdelete = 0 (chưa bị xóa mềm)
         $chefs = Chef::where('isdelete', 0)->get();

        // Trả về view 'our-chef' và truyền dữ liệu chefs vào
        return view('client.our-chef', compact('chefs'));
    }
}
