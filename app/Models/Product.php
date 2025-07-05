<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Products';
    protected $primaryKey = 'product_id';
    protected $timetamps = true;

    protected $fillable = [
        'product_name',
        'product_price',
    ];
}
