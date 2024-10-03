<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Wishlist extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'wishlists';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'product_id',
        'CreatedBy',
        'ModifiedBy',
    ];
    
    // Định nghĩa mối quan hệ với bảng users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Định nghĩa mối quan hệ với bảng products
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
