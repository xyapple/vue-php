<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
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
         $post = new Post;
        ////save to database
        // $post -> title = request ('title');
        // $post -> body = request('body');
        //$post->save();

        // Post::create([
        //     'title'=>request ('title'),
        //     'body'=>request ('body'),
        // ]);
        $this->validate(request(), [
             'title' => 'required|unique:posts|max:50',
             'body' => 'required|max:250',
         ]);

        Post::create(request(['title', 'body']));
        //redicret to the home page
        return redirect('/');

    }
}
