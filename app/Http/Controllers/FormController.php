<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //get  form input data
    public function getData(Request $req)
    {
        // return $req->input();
        // Validate fields
        $req->validate([
            'username'=>'required| Max:10 ',
            'password'=>'required | Min:8'
        ]);
        return $req->input();
    }
}
