<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Workshop extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'workshop';
    protected $primaryKey = 'workshop_id';

    public $timestamps = true;
    
    protected $fillable = [
        'user_id', 
        'product', 
        'status', 
        'isdelete', 
        'CreatedDate', 
        'CreatedBy'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
