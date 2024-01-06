<?php

namespace App\Http\Controllers;

use request;
use App\Models\UserWithPro;
use Illuminate\Support\Facades\DB;

class UserWithProController extends Controller
{
  public function userList()
  {

    $products = UserWithPro::orderBy('created_at', 'DESC')->get();

    return view('user-list', ["products" => $products]);
  }


  public function userProfile($id)
  {

    $products = UserWithPro::where('id', $id)->get();

    return view('user.profile', ['products' => $products]);

  }

  public function save()
  {

    $UserWithPro = new UserWithPro;
    $UserWithPro->username = \request('username');
    $UserWithPro->profession = \request('profession');
    $UserWithPro->save();

    return redirect('/user-list')->with('success','User added successfully');


  }
  public function delete($id)
  {
    $UserWithPro = UserWithPro::findOrFail($id);
    $UserWithPro->delete();

    return redirect('/user-list')->with('failure','User deleted');
  }


  public function select()
  {

    $select = DB::select("SELECT * FROM `users_with_pro`");

    return $select;
  }


  public function register(){
    return view('register-user.registeration');
}
}
