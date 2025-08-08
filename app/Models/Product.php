<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id'; // khóa chính

    protected $fillable = [
        'product_name',
        'product_price',
        'product_userid',
    ];
}
