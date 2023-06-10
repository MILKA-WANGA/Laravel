<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Employee;

class AccessController extends Controller
{
    //
    public function index()
    {
        return Employee::all();
    }
}
