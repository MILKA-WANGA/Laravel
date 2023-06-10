<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DevicesController extends Controller
{
    //
    function list()
    {
     return Device::all();
    }
}
