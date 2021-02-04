@extends('layout')

@section('content')

<div class="container">
  <h2>動画</h2>
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

<div class="container">
  <div>
    <a href={{ route('video.new') }}>新規投稿</a>
  </div>
</div>

<router-view />

@endsection
