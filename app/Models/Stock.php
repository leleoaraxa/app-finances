<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol',
        'name',
        'exchange',
        'currency',
        'datetime',
        'open',
        'high',
        'low',
        'close',
        'volume',
        'previous_close',
        'change',
        'average_volume'
    ];
}
