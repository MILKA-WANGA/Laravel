<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index()
    {
        echo "You have uploaded your file";
        return view("uploadFile");
    }
}
