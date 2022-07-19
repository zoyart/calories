<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'calories',
        'carbohydrates',
        'protein',
        'fats',
    ];

    public function histories() {
        return $this->belongsToMany(History::class)->withPivot('male');
    }
}
