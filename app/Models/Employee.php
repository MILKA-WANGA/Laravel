<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    //Make the first letter of value name capital

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
