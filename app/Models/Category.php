<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];


    public function foods(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(Food::class , 'id');
    }
    use HasFactory;
}
