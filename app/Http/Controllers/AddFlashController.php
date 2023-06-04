<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFlashController extends Controller
{
    //
    function addController(Request $req)
    {
    $data=$req->input("user");
    $req->session()->flash($data);
   
    }
}
