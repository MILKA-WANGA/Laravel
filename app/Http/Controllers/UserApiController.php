<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserApiController extends Controller
{
    //
    public function index()
    {
        return Http::get("http://localhost/Farmers/home.php");
    }
}
