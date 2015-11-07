@extends('layouts.app')

@section('content')

  <h1>Posts#Index</h1>

  @foreach ($posts as $post)
  <ul>    
    <li> Title: {{ $post->title }}</li>
    <li> Author: {{ $post->author }}</li>
    <li>Content: {{ $post->content }}</li>
  </ul>
  @endforeach
@stop