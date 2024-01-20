<?php

namespace App\Http\Controllers;
use App\Models\UserWithPro;
use Illuminate\Http\Request;

class CustomController extends Controller
{
  public function getShopper($id){
    $users = UserWithPro::where('id',$id)->get();



    return view('user.profile',['users'=>$users,]);
    
    }
}
?>