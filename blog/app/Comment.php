<?php

namespace App;

class Comment extends Model
{
    //a comment belong to One Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
