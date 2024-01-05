<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CustomController extends Controller
{
  public function getShopper($username,$profession){
        return view('user-info',compact('username','profession'));
    }
}
?>