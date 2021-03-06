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

    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }

    public function addComments($body)
    {
        // Comment::create([
        //     'body'=>$body,
        //     'post_id'=>$this->id
        // ]);
        $this -> comments()->create(compact('body'));
    }
}
