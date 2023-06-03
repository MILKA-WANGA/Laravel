<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function workLoad()
    {
        $names=["Anyango","Morine","Beatrice","Linnet"];
        return view("viewUsers", ['viewUser'=>$names]);
    }
}
