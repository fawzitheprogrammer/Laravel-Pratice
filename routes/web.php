<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserCred;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show-user', [UserCred::class,'showUserCred'] );
Route::get('/product-list', [ProductController::class,'productList'] );
Route::get('/user/{username}/{profession}',[CustomController::class,'getShopper']);
