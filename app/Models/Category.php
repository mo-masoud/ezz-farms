<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'subtitle_en',
        'subtitle_ar',
        'image',
    ];
}
