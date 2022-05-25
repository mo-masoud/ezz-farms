<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'label',
        'text_en',
        'text_ar',
        'extra'
    ];

    public static function getByKey(string $key): string
    {
        return self::where('key')->first()?->text ?? '';
    }
}
