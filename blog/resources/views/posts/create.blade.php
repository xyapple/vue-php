@extends('layouts.index')

@section('content')

<div class="col-sm-8 blog-main">
<h1>Create a Post</h1>
<hr>
<form method="post" action="/posts">
    {{--This must be in the form  --}}
    {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">Content of the Post</label>
    <textarea name="body" id="body" rows="8" cols="80" required></textarea>
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
</div>
@include('layouts.error')
</form>



</div><!-- /.blog-main -->
@endsection
