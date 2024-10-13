<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComingSoon extends Model
{
    use HasFactory;

    // Định nghĩa bảng nếu không theo chuẩn mặc định
    protected $table = 'coming_soon';

    // Định nghĩa khóa chính
    protected $primaryKey = 'coming_soon_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    // Các cột có thể được gán giá trị
    protected $fillable = [
        'image',
        'name',
        'release_date',
        'price',
        'product_id',
        'isdelete',
        'CreatedBy',
    ];

    // Quan hệ với bảng Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
