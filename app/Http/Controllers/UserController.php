<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getData()
    {
        //Select all data from the table user
        return User::all();
    }
}
