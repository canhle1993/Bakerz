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

    protected $fillable = ['product_name', 'inventory','describe','price','status','isdelete','image','CreatedBy','ModifiedBy'];

    // Liên kết nhiều với HeathyCatalog thông qua bảng trung gian link_product_heathy
    public function heathyCatalogs()
    {
        return $this->belongsToMany(HeathyCatalog::class, 'link_product_heathy', 'product_id', 'heath_id');
    }

    public function catalogs()
    {
        return $this->belongsToMany(Catalog::class, 'linkcatalogproduct', 'product_id', 'category_id');
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class, 'discountproduct', 'product_id', 'discount_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }


}
