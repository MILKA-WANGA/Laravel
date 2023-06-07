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
        'name'=>'Maurine',
        'email'=>'maurine@gmail.com',
        'password'=>'23',
        'updated_at'=>'07/06/2023',
        'created_at'=>'07/06/2023'
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