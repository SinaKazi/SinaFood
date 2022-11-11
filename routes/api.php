<?php

use App\Http\Controllers\Api\v1\AddressesController;
use App\Http\Controllers\Api\v1\FoodsController;
use App\Http\Controllers\Api\v1\RestaurantsController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->namespace('Api\v1')->middleware('auth:sanctum')->group(function (){
    Route::get('/restaurants' , [RestaurantsController::class , 'index']);
    Route::get('/restaurants/{restaurant_id}/foods' , [RestaurantsController::class , 'foods']);
    Route::get('/addresses' , [AddressesController::class , 'index']);

    Route::post('login' , [UserController::class , 'login']);
    Route::post('register' , [UserController::class , 'register']);


    Route::middleware('auth:sanctum')->group(function() {

    });
});
