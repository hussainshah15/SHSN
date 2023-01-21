<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdctController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login'); 
});


Route::POST("/login",[UserController::class,'login']);
Route::get("/",[ProdctController::class,'index']);
Route::get("detail/{id}",[ProdctController::class,'detail']);
Route::get("search",[ProdctController::class,'search']);
Route::POST("add_to_cart",[ProdctController::class,'addtocart']);

