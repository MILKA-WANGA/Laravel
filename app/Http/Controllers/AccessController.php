<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Member;

class AccessController extends Controller
{
    //
    public function index()
    {
        return Member::all();
    }
}
