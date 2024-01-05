<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show-user', [UserCred::class,'showUserCred'] );
Route::get('/product-list', [ProductController::class,'productList'] );
Route::get('/user/{id}',[CustomController::class,'getShopper']);

Route::get('/update/{id}',function($id){

   $timeStamp = date("Y-m-d");

//    $insert = DB::insert(
//     "INSERT INTO `users_with_pro` (`username`,`profession`,`expires_at`,`created_at`,`updated_at`,`profile_pic`)
//      VALUES ('Fawzi','Software Developer','$timeStamp','$timeStamp','$timeStamp','https://www.simplilearn.com/ice9/free_resources_article_thumb/tester-or-developer-what-suits-you-the-most.jpg')" 
//      );
   $update = DB::update(
    "UPDATE `users_with_pro` SET 
    `username` = 'Bahra Zana',
    `profession`= 'Dentist',
    `expires_at` = '$timeStamp',
    `created_at` = '$timeStamp',
    `updated_at` = '$timeStamp'
     WHERE id = $id" 
     );
//    $delete = DB::delete(
//     "DELETE FROM `users_with_pro` WHERE `id` = '$id' ");

 return $update;

});


Route::get('/select',function(){
    

    $select = DB::select("SELECT * FROM `users_with_pro`");


    return $select;


});


// Route::get('/user-profile/{id}',[ProductController::class,'ProductController@userProfile']);