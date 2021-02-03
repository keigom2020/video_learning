@extends('layout')

@section('content')

<div class="container">
  <h2>動画</h2>
  <p>{{ $message }}</p>
</div>

@foreach ($videos as $video)
  
  <div class="container">
    <p>
      <a href='{{ route("video.show", ["id" =>  $video->id]) }}'>
        {{ $video->id }}:
        {{ $video->title }}
      </a>
    </p>
  </div>

@endforeach

<router-view />

@endsection
