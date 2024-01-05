<?php

namespace App\Http\Controllers;

use App\Models\UserWithPro;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList () {
  
        $products = UserWithPro::orderBy('created_at','DESC')->get();
    
        return view('product-list',["products"=>$products]);
    }


  public  function userProfile($id){
 
    $products = UserWithPro::where('id',$id)->get();

    return view('user.profile',['products'=>$products]);

   }
}
