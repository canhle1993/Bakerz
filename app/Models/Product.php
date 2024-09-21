<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'product'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'product_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';
    
    // Liên kết nhiều với HeathyCatalog thông qua bảng trung gian link_product_heathy
    public function heathyCatalogs()
    {
        return $this->belongsToMany(HeathyCatalog::class, 'link_product_heathy', 'product_id', 'heath_id');
    }
}
