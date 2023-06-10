<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutater extends Model
{   
    public $timestamps=false;
    use HasFactory;
    public function setNameAttribute($value)
    {
     $this->attributes['name']="Mr. ".$value;
      
    }
    public function setAddressAttribute($value)
    {
      $this->attributes['address']= $value . "Kenya";
    }
}
