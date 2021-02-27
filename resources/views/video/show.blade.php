@extends('layout')

@section('content')

<div class="container course-heading-wrapper">
  <div class="row">
    <h2 class="heading__lv2">
      {{ $video->id }}：{{ $video->title }}

      @can('system-only')
      <a href={{ route('video.edit', ["id" =>  $video->id]) }} class='btn btn-info'>編集</a>
      @endcan
      
    </h2>
    {{-- <p>{{ $message }}</p> --}}
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
      <div class="row playerlist__heading">
        <h3 class="heading__lv3 mt-3 mb-3">コースの内容</h3>
        <button class="btn btn-info for-sp btn-toggle">プレイヤーリストを開く</button>
      </div>

      <ul class="playerlist">

      @foreach($video_players as $video_player)
        <li class="">
          <a href='{{ route("video.show", ["id" =>  $video_player->id]) }}' class="" id='{{ $video_player->id }}'>
            {{ $video_player->id }}:
            {{ $video_player->title }}
          </a>
        </li>
      @endforeach

      </ul>
    </div>

  </div>

  <div class="row video-detail mt-4">

    <div class="">
      <div class="mt-4 ml-5">
        <p>{{ $video->detail }}</p>
      </div>
      <div class="ml-5">
        <p>{{ $video->content }}</p>
      </div>
    </div>

    {{-- @if($browsing_histories->state_button == 0) 
      <p>視聴済みにする</p>
      @else
　　    <p>未視聴にする</p>
    @endif --}}

    {{-- 
    
    <div class="btn btn-info state-change-btn">
      <p>視聴済みにする</p>
    </div>
    @if($browsing_histories->state_button == 0) 
      <p>視聴済みにする</p>
      @else
　　    <p>未視聴にする</p>
    @endif

    --}}

    <browsing-history></browsing-history>

  </div>

  <div class="container">
    <div class="row mt-5 btn-wrapper">
      <div class="mr-4">
        <a href="{{ route('courses') }}" class="btn btn-info">一覧に戻る</a>
      </div>


      @if($nextVideo)
        <div class="">
          <a href='{{ route("video.show", ["id" =>  $video->id+1]) }}' class="btn btn-info">次の動画へ</a>
        </div>
        @else
        <div>
          <p>この動画が最後です。</p>
        </div>
      @endif


    </div>

  </div>

{{--<script src="{{ asset('/js/video.js') }}"></script>--}}

@endsection
