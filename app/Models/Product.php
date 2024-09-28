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
    
    // One product can appear in many order details
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'product_id');
    }
    
    public function getDiscountedPrice()
    {
        // Lấy tất cả các discount của sản phẩm
        // Lấy tất cả các discount của sản phẩm dựa trên this_product_id
        $discounts = $this->discounts()
        ->where(function ($query) {
            $query->where('discount.isdelete', '<>', 1)
                ->orWhereNull('discount.isdelete');
        })
        ->where('discountproduct.product_id', $this->product_id) // Điều kiện product_id
        ->get();

        // Tính tổng phần trăm giảm giá từ tất cả các discount
        $totalDiscount = $discounts->sum(function ($discount) {
            return $discount->discount;
        });
        
        $unitPrice= $this->price;
        // Tính giá sau khi giảm
        $discountedPrice = $unitPrice - ($unitPrice * $totalDiscount);

        if ($totalDiscount>1){
            $discountedPrice = 0;
        }
        // Trả về giá đã giảm
        return $discountedPrice;
    }

    public function getDiscountPercent()
    {
        // Lấy tất cả các discount của sản phẩm
        // Lấy tất cả các discount của sản phẩm dựa trên this_product_id
        $discounts = $this->discounts()
        ->where(function ($query) {
            $query->where('discount.isdelete', '<>', 1)
                ->orWhereNull('discount.isdelete');
        })
        ->where('discountproduct.product_id', $this->product_id) // Điều kiện product_id
        ->get();

        // Tính tổng phần trăm giảm giá từ tất cả các discount
        $totalDiscount = $discounts->sum(function ($discount) {
            return $discount->discount;
        });
        
        // Trả về giá đã giảm
        return $totalDiscount * 100;
    }
}

