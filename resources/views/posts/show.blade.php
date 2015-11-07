@extends('layouts.app')

@section('content')
  <h1>Posts#Show</h1>
  
    <ul>    
      <li> Title: {{ $post->title }} </li>
      <li> Author: {{ $post->author }}</li>
      <li>Content: {{ $post->content }}</li>
  </ul>
@stop