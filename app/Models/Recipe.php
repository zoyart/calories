<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'author',
        'calories',
        'carbohydrates',
        'protein',
        'fats',
        'cooking_time',
        'is_published',
        'male',
        'preview_image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
