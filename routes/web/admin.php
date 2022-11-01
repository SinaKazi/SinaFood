<?php

Route::get('/' , function (){
    return view('dashboard');
})->name('dashboard');

Route::get('restaurants' , function (){
    return view('panel/restaurants');
})->name('Restaurants');
