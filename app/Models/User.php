<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

 protected $table = 'Users';
    protected $primaryKey = 'user_id';
    protected $timetamps = true;
    

    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',
        'image_url',
    ];
}
