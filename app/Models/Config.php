<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'label',
        'value_en',
        'value_ar',
        'extra',
        'type',
    ];
}
