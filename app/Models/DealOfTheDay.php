<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealOfTheDay extends Model
{
    use HasFactory;

    // Define the table name if it's not the default plural of the class name
    protected $table = 'deal_of_the_day';

    // Define the primary key field
    protected $primaryKey = 'deal_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'image',
        'name',
        'promotion_date',
        'price',
        'product_id',
        'isdelete',
        'CreatedBy',
    ];

    // Relationship to the Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // You can also add scopes or other model-specific methods here
}
