<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function displayUsers(){
        $users = array("Sahil","Amir","Kamran","Younis");
        // array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        // return view("welcome",['users'=>$users]);
        return view("welcome",compact('users'));
    }
}
