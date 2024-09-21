<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = ['product_id', 'product_name', 'inventory','describe','price','status','isdelete','image','CreatedDate','CreatedBy','ModifiedDate','ModifiedBy'];

}
