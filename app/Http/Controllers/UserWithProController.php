<?php

namespace App\Http\Controllers;


use App\Models\UserWithPro;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class UserWithProController extends Controller
{
  public function userList()
  {
    $rand = rand().rand();
    //$guest = Cookie::has('guest')? Cookie::get('guest') : Cookie::queue("guest",$rand,4555);

    $checkboxValues = [
      "Vue",
      "React",
      "Angular",
      "Laravel",
      "Python",
      "Django",
      "Node.js",
      "Flutter",
      "Dart",
      "Github",
      "Git",
      "Tailwind CSS",
      "Express JS"
  ];
  
  // You can then use this array for various purposes, like iterating over it, checking if certain values are present, etc.
  

    $users = UserWithPro::orderBy('created_at', 'DESC')->get();
    return view('user-list', ["products" => $users, "listOfSkill"=>$checkboxValues]);
    
  }


  public function userProfile($id)
  {

    $products = UserWithPro::where('id', $id)->get();

    return view('user.profile', ['products' => $products]);

  }

  public function save()
  {



    if(request()->validate(['username' => 'required','profession' => 'required','skills' => 'required'])){
      $UserWithPro = new UserWithPro;
      $UserWithPro->username = \request('username');
      $UserWithPro->profession = \request('profession');
      $UserWithPro->skills = \request('skills');
      $UserWithPro->save();
    }
   
  

    return redirect('/')->with('success','User added successfully');


  }
  public function delete($id)
  {
    $UserWithPro = UserWithPro::findOrFail($id);
    $UserWithPro->delete();

    return redirect('/')->with('failure','User deleted');
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
