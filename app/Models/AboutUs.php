<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'title_en',
        'title_ar',
        'small_brief_en',
        'small_brief_ar',
        'body_en',
        'body_ar',
    ];
}
