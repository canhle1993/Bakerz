<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductImage extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'product_image'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'prodimg_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';
    protected $fillable = ['product_id', 'image'];
    // Liên kết với model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
