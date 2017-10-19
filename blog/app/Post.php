<?php

namespace App;



class Post extends Model
{
    //Model.php handle the work
    //one post can have many comments
    public function comments()
    {
        return $this -> hasMany(Comment::class);
    }
}
