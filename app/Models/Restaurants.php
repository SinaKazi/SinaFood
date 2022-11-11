<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name',
        "phone_number",
        'account_number',
        'statue',
        'type_restaurant',
        'url_img',
        'work_time',
        'is_open'
    ];
    use HasFactory;

    public function foods(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Food::class);
    }

    public function address(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Address::class , 'id');
    }
}
