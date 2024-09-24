<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
<<<<<<< HEAD

=======
    protected $table = 'user'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'user_id';

    public $timestamps = true;
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'ModifiedDate';
>>>>>>> 1fb4cbb0b5b95f7829e960a184d68e887ca76077
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
    ];

=======
        'role_id',
        'phone',
        'gender',
        'address',
        'isdelete',
        'note',
        'avatar',
    ];
>>>>>>> 1fb4cbb0b5b95f7829e960a184d68e887ca76077
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======
    
>>>>>>> 1fb4cbb0b5b95f7829e960a184d68e887ca76077
}
