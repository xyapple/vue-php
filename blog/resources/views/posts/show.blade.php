@extends('layouts.index')

@section('content')

<div class="col-sm-8 blog-main">
    <h1> {{$post->title}}</h1>
    <p>
         {{$post->body}}
    </p>
<hr>
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">

                            {{$comment -> body}}

                </li>
            @endforeach
        </ul>

    </div>
    <hr>
    {{-- Add a comment --}}
    <div class="card">
        <div class="card-block">
            <form name="comment" method="POST" action="/posts/{{$post->id}}/comments" >
                {{--This must be in the form  --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" name="body" rows="8" cols="80" placeholder="Please leave comment"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
