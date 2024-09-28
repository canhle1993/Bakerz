<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;

    // Liên kết model với bảng 'userreview'
    protected $table = 'userreview';

    // Tắt timestamps tự động của Laravel
    public $timestamps = false;

    // Các cột có thể thêm dữ liệu bằng phương thức create hoặc fill
    protected $fillable = [
        'ratestar', 
        'comment', 
        'user_id', 
        'product_id', 
        'CreatedDate', 
        'CreatedBy', 
        'ModifiedDate', 
        'ModifiedBy'
    ];

    // Xác định quan hệ giữa đánh giá và sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Xác định quan hệ giữa đánh giá và người dùng
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
