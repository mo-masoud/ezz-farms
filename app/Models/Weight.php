<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar'
    ];

    public function products()
    {
        $this->belongsToMany(Product::class);
    }
}
