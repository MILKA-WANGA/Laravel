<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class OneRelationController extends Controller
{
    //
    public function index()
    {
        return Student::find(1)->getLecture;
    }
}
