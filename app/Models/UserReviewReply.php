<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReviewReply extends Model
{
    use HasFactory;

    protected $table = 'user_review_replies'; // Liên kết với bảng 'user_review_replies'

    protected $fillable = [
        'userreview_id',
        'user_id',
        'reply',
    ];

    // Quan hệ với UserReview
    public function userReview()
    {
        return $this->belongsTo(UserReview::class, 'userreview_id');
    }

    // Quan hệ với User (người trả lời)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
