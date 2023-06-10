<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirst extends Controller
{
    //
    function index()
    {
        return["name"=>"John"];
    }
}
?>
