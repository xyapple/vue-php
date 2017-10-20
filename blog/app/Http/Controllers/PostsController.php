<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        //create a new post basice on the request
         $post = new Post;
        ////save to database
        // $post -> title = request ('title');
        // $post -> body = request('body');
        //$post->save();

        $this->validate(request(), [
             'title' => 'required|unique:posts|max:50',
             'body' => 'required|max:250',
         ]);

         Post::create([
             'title'=>request ('title'),
             'body'=>request ('body'),
             'user_id'=>auth()->user()->id,
         ]);
        //redicret to the home page
        return redirect('/');

    }
}
