<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = [
        'product_name',
        'category_id',
        'price',
        'description',
        'image',
    ];
    public $timestamps = true;
}
