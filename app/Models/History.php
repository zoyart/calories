<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'calories_remained',
        'carbohydrates',
        'protein',
        'fats',
        'workout',
    ];

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('male');
    }
}
