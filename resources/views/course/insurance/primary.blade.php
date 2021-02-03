@extends('layout')

@section('content')

  <div class="container">
    <div class="row">
      <h2>{{ $video->id }}：{{ $video->title }}</h2>
      <!-- <p>{{ $message }}</p> -->
      <p>{{ $video->title }}</p>
      <p>講師：{{ $video->author }}</p>
    </div>

    <div class="">
      <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}" width="640" height="361" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="row mt-5">
    <div class="">
      <a href="{{ route('video.index') }}" class="btn btn-info">一覧に戻る</a>
    </div>
    </div>
  </div>

@endsection
