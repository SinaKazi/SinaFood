<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Food extends Model
{
    protected $fillable = [
        'title',
        'price',
        'raw_material',
        'image',
        'inventory'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class , 'id');
    }
    use HasFactory;
}
