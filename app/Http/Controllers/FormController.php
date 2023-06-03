<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //get  form input data
    public function getData(Request $req)
    {
        return $req->input();
    }
}
