<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //this is the parent of the class to handle protected
    protected $guarded =[];
     //protected $fillable = ['user_id'];
}
