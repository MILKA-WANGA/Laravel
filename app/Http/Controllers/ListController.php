<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    //
    function index()
    {
        //Store fetched data in a variable
        $data= Member::all();
        //Passed data in a view:usersList
        return view("usersList",['users'=>$data]);
    }
}
