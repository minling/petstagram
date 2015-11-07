@extends('layouts.app')

@section('content')
  <h1>Posts#Edit</h1>

  {{ $post->title }}

  {!! Form::model($post, ['url' => 'posts/' . $post->id, 'method' => 'PATCH']) !!}
    <div class="form-group">
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::text('author', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
@stop