
@extends('layouts.app')

@section('content')

  <h1>Home#Index</h1>

  @foreach ($posts as $post)
  <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="http://www.cgdev.org/sites/default/files/cat8.jpg">
              <span class="card-title">{{ $post->title }}</span>
            </div>
            <div class="card-content">
            <li> Title: <a href="posts/{{ $post->id }}"> {{ $post->title }} </a></li>
              <li> Author: {{ $post->author }}</li>
              <li>Content: {{ $post->content }}</li>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
  @endforeach
@stop
