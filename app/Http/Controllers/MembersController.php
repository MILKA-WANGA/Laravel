<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
   public  function dbOperations()

    {   //Select data from speciic table e.g members 
        return DB::table('members')->join('add_members','members.id', "=" , 'add_members.id')->select('members.*')->get();
        
        //Employee join operation
       // return DB::table('members')->join('add_members','members.id', "=" , 'add_members.id')->get();
        
        //Aggregate/Mathematical calculations
        //return (array)DB::table('add_members')->avg('id');
        //Delete Data
        // return (array)DB::table('add_members')->where('id',3)
        // ->delete();
        //Update data
        // return (array)DB::table('add_members')->where('id',3)
        // ->update([
        //     'name'=>'Maurine',
        //     'email'=>'felister@gmail.com',
        //     'password'=>'23',
        //     'updated_at'=>'07/06/2023',
        //     'created_at'=>'07/06/2023'
        // ]);
        //insert data 
    //     return (array)DB::table('add_members')->insert([
    //     'name'=>'Maurine',
    //     'email'=>'maurine@gmail.com',
    //     'password'=>'23',
    //     'updated_at'=>'07/06/2023',
    //     'created_at'=>'07/06/2023'
    // ]);
        //return (array)DB::table('add_members')->find(2);
        //Get the number of records
        //return DB::table('add_members')->count();
       // return DB::table('add_members')->where ('id',1)->get();
        
        //return view("membersListed",['data'=>$data]);
        // return view("membersListed");
    }
}
?>