<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
        // echo "You have uploaded your file";
        // return view("uploadFile");
        return $req->file('file')->store('docs');
    }
}
