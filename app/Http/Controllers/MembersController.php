<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
   public  function dbOperations()
    {
        $data= DB::table('add_members')->get();
        return view("membersListed",["data"=>$data]);
        // return view("membersListed");
    }
}
?>