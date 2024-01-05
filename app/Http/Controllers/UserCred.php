<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCred extends Controller
{
    public function showUserCred () {
        return view('show-user-info',["username"=>'Fawzi Gharib',"password"=>"1234"]);
    }
}
