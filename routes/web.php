<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\UserWithProController;
use App\Http\Controllers\UserCred;
use Faker\Core\DateTime;
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

Route::get('/', [UserWithProController::class,'userList']);
Route::get('/show-user', [UserCred::class,'showUserCred'] );
Route::post('/save', [UserWithProController::class,'save'] );
Route::get('/delete/{id}', [UserWithProController::class,'delete'] );
Route::get('/user/{id}',[CustomController::class,'getShopper']);
Route::get('/select',[UserWithProController::class,'select']);
Route::get('/register',[UserWithProController::class,'register']);

