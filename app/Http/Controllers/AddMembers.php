<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddMember;

class AddMembers extends Controller
{
    //
    function show(Request $req)
    {
     $member=new AddMember;
     $member->name=$req->name;
     $member->email=$req->email;
     $member->password=$req->password;
     $member->save();

    }
}
