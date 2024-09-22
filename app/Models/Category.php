<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Bảng tương ứng trong cơ sở dữ liệu
    protected $primaryKey = 'category_id'; // Khóa chính của bảng
}
