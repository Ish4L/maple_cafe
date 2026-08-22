<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $fillable = [
        'customer_name',
        'phone',
        'order_type',
        'total_price',
        'status',
    ];
    public $timestamps = true;
}
