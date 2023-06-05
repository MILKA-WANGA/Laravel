<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    //
    function index()
    {
        return Member::all();
    }
}
