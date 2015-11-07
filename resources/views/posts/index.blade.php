@extends('layouts.app')

@section('content')

  <h1>Posts#Index</h1>

  @foreach ($lessons as $lesson)
    {{ $lesson}}
  @endforeach
@stop