<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price_per_hour',
        'status',
    ];
}
