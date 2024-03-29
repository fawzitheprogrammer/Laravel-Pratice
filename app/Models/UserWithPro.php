<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWithPro extends Model
{
    use HasFactory;


    protected $table = 'users_with_pro';
    public $timeStamp= false;
    protected $casts = [
        'skills' => 'array'    
    ];
}
