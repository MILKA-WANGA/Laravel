<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Validation;

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
    function delete($id)
    {
        
        $worker=Worker::find($id);
        $result=$worker->delete();
        if($result)
        {
            return ["result"=>"Data deleted for the id ".$id];
        }
        else{
            return ["result"=>"Data not deleted"];
        }
    }
    //search results
    function search($name)
    {
        return Worker::where("name" ,"like", "%".$name."%")->get();
    }
    //Upload a file
    function upload(Request $req)
    {
        $result=$req->file('file')->store("imageFile");
        return ["result"=>$result];
    }
   //Validation
//    function validat(Request $req)
//    {
//     $rules=array(
//         "name"=>"required"
//     );
//    $validator=Validator::make($req->all(),$rules)
//    if($validator->fails())
//    {
//     return $validator->errors();
//    }
//    else{
//    return $rules;
//    }
// }

    
        
    
}
