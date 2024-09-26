<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'role';
    protected $primaryKey = 'role_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';

    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
