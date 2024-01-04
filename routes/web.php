<?php

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
Route::get('/show-user', function () {
    return view('show-user-info',["username"=>'Fawzi Gharib',"password"=>"1234"]);
});
Route::get('/product-list', function () {
  
    $products = [
        [ 'username' => 'John Doe', 'profession' => 'Software Engineer'],
        [ 'username' => 'Jane Smith', 'profession' => 'Graphic Designer'],
        [ 'username' => 'Alex Johnson', 'profession' => 'Data Analyst'],
        [ 'username' => 'Emily Davis', 'profession' => 'Marketing Manager'],
        [ 'username' => 'Michael Brown', 'profession' => 'Project Coordinator']
    ];

    return view('product-list',["products"=>$products]);
});
