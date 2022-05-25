<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'animal_kind_id',
        'name_en',
        'name_ar',
        'brief_en',
        'brief_ar',
        'description_en',
        'description_ar',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function animalKind()
    {
        return $this->belongsTo(AnimalKind::class);
    }

    public function weights()
    {
        return $this->belongsToMany(Weight::class, 'products_weights');
    }

    public function cuts()
    {
        return $this->belongsToMany(Cut::class, 'cuts_products');
    }

    public function packagings()
    {
        return $this->belongsToMany(Packaging::class, 'packagings_products');
    }
}
