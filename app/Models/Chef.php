<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $table = 'chef';  // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'image',      // Đường dẫn hoặc URL của hình ảnh
        'name',       // Tên của đầu bếp
        'position',   // Chức vụ
        'description',// Mô tả về đầu bếp
        'isdelete' 
    ];
}
