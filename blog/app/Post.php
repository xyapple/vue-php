<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //deal with the Mass Dum
    //protected $fillable =['title', 'body'];
    protected $guarded =[];
}
