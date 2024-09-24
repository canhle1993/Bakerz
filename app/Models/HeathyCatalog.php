<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HeathyCatalog extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'heathy_catalog'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'heath_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = ['heath_catalog','isdelete','image','CreatedBy','ModifiedBy'];

    // Liên kết nhiều với Product thông qua bảng trung gian link_product_heathy
    public function products()
    {
        return $this->belongsToMany(Product::class, 'link_product_heathy', 'heath_id', 'product_id');
    }
}
