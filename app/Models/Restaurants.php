<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name',
        "phone_number",
        'address',
        'account_number',
        'statue',
        'type_rest',
        'lat',
        'lng',
        'url_img',
        'time'
    ];
    use HasFactory;

    public function foods(){
        return $this->hasMany(Food::class);
    }
}
