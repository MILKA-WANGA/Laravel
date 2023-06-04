<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Creating session
class sessionController extends Controller
{
    //
    public function loginSession(Request $req)
    {
    $data= $req->input();
    $req->session()->put("user",$data["user"]);


    }
}
