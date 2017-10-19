<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        //create a new post basice on the request
        $post = new \App\Post;

        $post -> title = request ('title');
        $post -> body = request('body');
        //save to database
        $post->save();
        // Post::create([
        //     'title'=>request ('title'),
        //     'body'=>request ('body'),
        // ]);
        //redicret to the home page
        return redirect('/');

    }
}
