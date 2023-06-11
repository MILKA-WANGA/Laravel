<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkersController extends Controller
{
    //
    function add(Request $req)
     {
        $worker=new Worker;
        $worker->name=$req->name;
        $worker->email=$req->email;
       $result=$worker->save();

        if($result)
        {
            return ["result"=>"Data saved successfull"]; 
        }
        else
        {
            return ["result"=>"Data not saved"];
        }
    }
   
    
        
    
}
