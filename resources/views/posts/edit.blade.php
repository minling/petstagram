@extends('layouts.app')

@section('content')
  <h1>Posts#Edit</h1>

  {{ $post->title }}

  {!! Form::model($post) !!}

    {!! Form::text('title') !!}

  {!! Form::close() !!}
@stop