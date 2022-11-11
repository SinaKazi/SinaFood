<?php

use App\Http\Controllers\RestaurantsController;
use Illuminate\Support\Facades\Route;

Route::get('/' , function (){
    return view('panel.dashboard');
})->name('dashboard');

//Route::get('restaurants' , function (){
//    return view('panel.restaurants');
//})->name('Restaurants');

Route::resource('restaurants' , RestaurantsController::class );
Route::resource('foods' , RestaurantsController::class );
