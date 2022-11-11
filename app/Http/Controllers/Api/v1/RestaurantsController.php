<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Food;
use App\Http\Resources\v1\Restaurant;
use App\Models\Category;
use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $restaurants = Restaurants::all();
        return Restaurant::collection($restaurants);
    }

    public function foods($restaurant_id){
        $categories = Category::query()->where('restaurant_id', '=' , $restaurant_id)->get();
        return \App\Http\Resources\v1\Ctegory::collection($categories);
    }
}
