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
    function update(Request $req)
    {
        $worker=Worker::find($req->id);
        $worker->name=$req->name;
        $worker->email=$req->email;
        $result=$worker->save();
        if($result)
        {
            return ["result"=>"Data updated successful"];
        }
        else{
            return ["result"=>"Update failed!"];
        }
    }
   
    
        
    
}
