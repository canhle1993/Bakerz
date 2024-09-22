<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Catalog extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = ['category_name','isdelete','image','CreatedBy','ModifiedBy'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'linkcatalogproduct', 'category_id', 'product_id');
    }
}
