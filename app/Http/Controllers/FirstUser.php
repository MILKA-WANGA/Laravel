<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Connect to DB
use Illuminate\Support\Facades\DB;

class FirstUser extends Controller
{
    public function index()
    {
        return DB::select("select * from user");
        // return "Hello from controller";
    }
}
