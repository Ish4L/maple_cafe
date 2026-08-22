<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $fillable = [
        'category_name',
    ];
    public $timestamps = false;
}
