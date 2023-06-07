<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
   public  function dbOperations()
    {
        return DB::table('add_members')->where ('id',1)->get();
        
        //return view("membersListed",['data'=>$data]);
        // return view("membersListed");
    }
}
?>