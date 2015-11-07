@extends('layouts.app')

@section('content')

<h1>Posts#New</h1>

<!-- Display Validation Errors -->
  @include('common.errors')

    {{ csrf_field() }}
<!-- <form action="/posts" method="POST">
<h1>Make a new Post</h1>
  <div class="form-group">
      <label for="posts">Title</label>
      <input type="text" name="title"><br>

      <label for="posts">Content</label>
      <textarea class="form-control" rows="5" id="content"></textarea>

      <label for="posts">Author</label>
      <input type="text" name="author">

  </div>

  <!-- Add Task Button -->
          <!-- <button type="submit" class="btn btn-success"> -->
              <!-- <i class="fa fa-plus"></i> Add Post -->
          <!-- </button> -->
<!-- </form> --> 
  <h1>Create a new Post</h1>

  {!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group">
      Title: {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      Author: {!! Form::text('author', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      Content: {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
@endsection