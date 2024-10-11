<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'socialmedia';
    protected $primaryKey = 'SocialMedia_id';
    
    public $timestamps = false;

    protected $fillable = [
        'CreatedDate',
        'CreatedBy',
        'ModifiedDate',
        'ModifiedBy',
        'link',
        'name',
        'image',
        'isdelete'
    ];

}
