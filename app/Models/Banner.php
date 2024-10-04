<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Banner extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'banner';
    protected $primaryKey = 'banner_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    // Các field có thể điền (fillable) để bảo vệ chống mass-assignment
    protected $fillable = [
        'image_banner',
        'image_product',
        'title1',
        'title2',
        'product_id',
        'description',
        'isdelete'
    ];

    // Thiết lập mối quan hệ nhiều-1 với bảng Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
