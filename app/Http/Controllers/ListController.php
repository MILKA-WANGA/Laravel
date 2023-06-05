<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    //
    function index()
    {
        //Store fetched data in a variable and paginate
        $data= Member::paginate(3);
        //Passed data in a view:usersList
        return view("usersList",['users'=>$data]);
    }
    //Create a delete function
    function delete($id)
    {
        //Find the id
        $data= Member::find($id);
        $data->delete();
        return redirect("list");
        
    }
    function edit($id)
    {
        $data= Member::find($id);
        return view("usersList",["useredit=>$data"]);
    }
    function update()
    return view()
}
