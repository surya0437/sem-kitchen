<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellEquipment extends Model
{
    protected $casts = [
        'image' => 'array',
    ];
}
