<?php

namespace App;

class Comment extends Model
{
    //a comment belong to One Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //a comment belong to One User $comment ->user->name
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
