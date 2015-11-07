@extends('layouts.app')

@section('content')

  <h1>Posts#Index</h1>

  @foreach ($posts as $post)
    {{ $post->title }}
  @endforeach
@endsection