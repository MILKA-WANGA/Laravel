<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
   public  function dbOperations()
    {    
        return (array)DB::table('add_members')->insert([
        'name'=>'name',
        'email'=>'email',
        'password'=>'password',
        'updated_at'=>'updated_at',
        'created_at'=>'created_at'
    ]);
        //return (array)DB::table('add_members')->find(2);
        //Get the number of records
        //return DB::table('add_members')->count();
       // return DB::table('add_members')->where ('id',1)->get();
        
        //return view("membersListed",['data'=>$data]);
        // return view("membersListed");
    }
}
?>