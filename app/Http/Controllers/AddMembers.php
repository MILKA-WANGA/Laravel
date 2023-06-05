<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addMember;

class AddMembers extends Controller
{
    //
    function show(Request $req)
    {
     $member=new addMember();
     $member->name=$req->name;
     $member->email=$req->email;
     $member->password=$req->password;
     $member->save();
     return view("adUsers");

    }
}
