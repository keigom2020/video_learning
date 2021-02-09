@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <h2 class="heading__lv2">{{ $video->id }}：{{ $video->title }}</h2>
    <!-- <p>{{ $message }}</p> -->
  </div>
  <div class="row">
    <p>講師：{{ $video->author }}</p>
  </div>
</div>

<div class="container area-video">
  <div class="row">
    <!-- <div class="col-8">
      <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}" width="640" height="361" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div> -->

    <!-- <div style="padding:56.25% 0 0 0;position:relative;" class="col-md-8"> -->
    <div class="col-md-8 iframe-wrapper">
      <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}?byline=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-md-4">
      <h3 class="headin__lv3">コースの内容</h3>
      <ul class="playerlist">

      @foreach($video_players as $video_player)
        <li>
          <a href='{{ route("video.show", ["id" =>  $video_player->id]) }}' class="" id='{{ $video_player->id }}'>
            {{ $video_player->id }}:
            {{ $video_player->title }}
          </a>
        </li>
      @endforeach

      </ul>
    </div>

  </div>

  <div class="row mt-4 ml-5">
    <p>{{ $video->detail }}</p>
  </div>
  <div class="row ml-5">
    <p>{{ $video->content }}</p>
  </div>
</div>

<div class="container">
  <div class="row mt-5">
    <div class="mr-4">
      <a href="{{ route('courses') }}" class="btn btn-info">一覧に戻る</a>
    </div>

    <div class="">
      <a href='{{ route("video.show", ["id" =>  $video->id+1]) }}' class="btn btn-info">次の動画へ</a>
    </div>


  </div>
</div>

<script src="{{ asset('/js/video.js') }}"></script>

@endsection
