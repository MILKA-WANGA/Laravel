<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\Mutater;

class MutateController extends Controller
{
    //
    public function index()
    {
        return Mutater::all();
    }
}
