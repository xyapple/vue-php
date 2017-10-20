<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

use App\Comment;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required:min:2']);
        $post->addComments(request('body'));

        return back();
    }


}
