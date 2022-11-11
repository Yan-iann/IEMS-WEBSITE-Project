<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'user_info';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'user_ID',
        'name',
        'middle_name',
        'last_name',
        'profile_pic',
    ];
}
