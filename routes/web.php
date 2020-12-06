<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::get('/logout', function () {
    Session::forget('user');//forget() function is used to erase the data
    return redirect('login');
});
Route::post("/login",[UserController::class,'login']);//login is a function in USerController
Route::get("/",[ProductController::class,'index']);//index is a function in ProductController
Route::get("detail/{id}",[ProductController::class,'detail']);//detail is a function in ProductController
Route::get("search",[ProductController::class,'search']);//search is a function in ProductController
Route::post("add_to_cart",[ProductController::class,'addToCart']);//addToCart is a function in ProductController
