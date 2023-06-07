<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
   public  function dbOperations()
    {
        // return DB::table('add_members')-
        return view("membersListed");
    }
}
?>