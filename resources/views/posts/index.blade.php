@extends('layouts.app')

@section('content')

  <h1>Posts#Index</h1>

  @foreach ($posts as $post)
  <ul>    
    <li> Title: <a href="posts/{{ $post->id }}"> {{ $post->title }} </a></li>
    <li> Author: {{ $post->author }}</li>
    <li>Content: {{ $post->content }}</li>
  </ul>
  @endforeach
@stop