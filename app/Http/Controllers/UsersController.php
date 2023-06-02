<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function workLoad()
    {
        return view("viewUsers", ['viewUsers'=>['Janet','Marion','Brian']]);
    }
}
