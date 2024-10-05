<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Nếu khóa chính không phải là 'id', bạn phải chỉ định nó
    protected $primaryKey = 'blog_id';

    protected $fillable = ['user_id', 'blog_name', 'image', 'title1', 'title2', 'content1', 'content2'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
