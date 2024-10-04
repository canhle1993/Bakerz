<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Notification extends Model
{
    use HasFactory;

    // Liên kết model với bảng 'notifications'
    protected $table = 'notifications';

    // Các cột có thể thêm dữ liệu bằng phương thức create hoặc fill
    protected $fillable = [
        'user_id',
        'review_id',
        // 'reply_id',
        'is_read',
        'created_at' // Thêm created_at vào fillable nếu bạn muốn tạo record với timestamp
    ];

    // Đảm bảo rằng Laravel hiểu 'created_at' là một cột datetime
    protected $dates = ['created_at'];

    // Tắt timestamps tự động của Laravel nếu không có cột updated_at, created_at
    public $timestamps = false;

    // Quan hệ với bảng UserReview
    public function review()
    {
        return $this->belongsTo(UserReview::class, 'review_id');
    }

    // Quan hệ với bảng UserReviewReply
    // public function reply()
    // {
    //     return $this->belongsTo(UserReviewReply::class, 'reply_id');
    // }

    // Quan hệ với bảng User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Tạo getter cho created_at để đảm bảo Carbon có thể sử dụng
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value); // Chuyển đổi chuỗi thành Carbon instance
    }
}
