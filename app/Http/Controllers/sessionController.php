<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Creating session
class SessionController extends Controller
{
    //
    public function index(Request $req)
    {
    $data= $req->input();
    $req->session()->put("user",$data["username"]);
     echo session["user"]


    }
}
