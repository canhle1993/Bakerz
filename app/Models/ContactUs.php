<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ContactUs extends Model
{
    protected $table = 'ContactUs';
    protected $primaryKey = 'ID';
    public $timestamps = false; // Vì bảng của bạn không dùng cột timestamps mặc định

    protected $fillable = [
        'email', 'name', 'phone', 'address', 'comment','status', 'isdelete', 'CreatedDate', 'CreatedBy', 'ModifiedDate', 'ModifiedBy'
    ];

    // Khai báo các cột kiểu date để Laravel tự động cast chúng sang Carbon object
    protected $dates = ['CreatedDate', 'ModifiedDate'];

    // Nếu bạn cần tự động đặt giá trị cho CreatedDate và ModifiedDate khi tạo/sửa
    public static function boot()
    {
        parent::boot();

        // Đặt giá trị mặc định cho CreatedDate khi tạo mới
        static::creating(function ($model) {
            $model->CreatedDate = Carbon::now();
        });

        // Đặt giá trị cho ModifiedDate khi cập nhật
        static::updating(function ($model) {
            $model->ModifiedDate = Carbon::now();
        });
    }
}
