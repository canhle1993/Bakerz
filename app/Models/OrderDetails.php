<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class OrderDetails extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'orderdetails';
    protected $primaryKey = 'order_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'selling_price',
        'discount',
        'purchase_date',
        'status',
        'isdelete'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
