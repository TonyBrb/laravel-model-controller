@extends('layouts.main')

@section('content')

<div class="container">
  <h1>Film</h1>
  @foreach ($movies as $movie)
    <ul>
      <li>{{ $movie->title }}</li>
    </ul>
  @endforeach
</div>

@endsection