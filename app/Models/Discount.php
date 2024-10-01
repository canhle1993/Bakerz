<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Discount extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'discount'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'discount_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = ['promotion_name','start_date','end_date','discount','isdelete','CreatedBy','ModifiedBy'];

    // Liên kết nhiều với Product thông qua bảng trung gian discountproduct
    public function products()
    {
        return $this->belongsToMany(Product::class, 'discountproduct', 'discount_id', 'product_id');
    }
}
