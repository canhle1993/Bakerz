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

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    // Định nghĩa quan hệ với bảng userreview
    public function reviews()
    {
        return $this->hasMany(UserReview::class, 'product_id');
    }
    
    public function getDiscountedPrice()
    {
        $discounts = $this->discounts()
        ->where(function ($query) {
            $query->where('discount.isdelete', '<>', 1)
                ->orWhereNull('discount.isdelete');
        })
        ->where('discountproduct.product_id', $this->product_id)
        ->get();

        $totalDiscount = $discounts->sum(function ($discount) {
            return $discount->discount;
        });
        
        $unitPrice = $this->price;
        $discountedPrice = $unitPrice - ($unitPrice * $totalDiscount);

        if ($totalDiscount > 1) {
            $discountedPrice = 0;
        }

        return $discountedPrice;
    }

    public function getDiscountPercent()
    {
        $discounts = $this->discounts()
        ->where(function ($query) {
            $query->where('discount.isdelete', '<>', 1)
                ->orWhereNull('discount.isdelete');
        })
        ->where('discountproduct.product_id', $this->product_id)
        ->get();

        $totalDiscount = $discounts->sum(function ($discount) {
            return $discount->discount;
        });

        return $totalDiscount * 100;
    }
}
