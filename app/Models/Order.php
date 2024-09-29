<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'order';
    protected $primaryKey = 'order_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = [
        'user_id',
        'total',
        'discount',
        'pay',
        'purchase_date',
        'status',
        'delivery_address',
        'delivery_phone',
        'delivery_fee',
        'isdelete',
    ];

    // One order has many order details
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
