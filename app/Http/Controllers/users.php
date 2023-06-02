<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //Define  a function
        public function index($user)
    {   
        echo $user;
        echo "This is how we define function in contoller";
    }
}
