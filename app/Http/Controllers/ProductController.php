<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList () {
  
        $products = [
            [ 'username' => 'John Doe', 'profession' => 'Software Engineer'],
            [ 'username' => 'Jane Smith', 'profession' => 'Graphic Designer'],
            [ 'username' => 'Alex Johnson', 'profession' => 'Data Analyst'],
            [ 'username' => 'Emily Davis', 'profession' => 'Marketing Manager'],
            [ 'username' => 'Michael Brown', 'profession' => 'Project Coordinator']
        ];
    
        return view('product-list',["products"=>$products]);
    }
}
