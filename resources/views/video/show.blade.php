@extends('layout')

@section('content')

  <main id="video">
    <div class="container">
      <div class="row">
        <h2 class="heading__lv2">{{ $video->id }}：{{ $video->title }}</h2>
        <!-- <p>{{ $message }}</p> -->
      </div>
      <div class="row">
        <p>講師：{{ $video->author }}</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- <div class="col-8">
          <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}" width="640" height="361" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div> -->

        <div style="padding:56.25% 0 0 0;position:relative;" class="col-md-8">
          <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}?byline=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-md-4">
          <p>コースの内容</p>
          <ul class="playerlist">











            @if($category_id = 1)
              @foreach($videos_1 as $video)
              <li>
                <a href='{{ route("video.show", ["id" =>  $video->id]) }}' class="text-center">
                  {{ $video->id }}:
                  {{ $video->title }}
                </a>
              </li>
              @endforeach

            @elseif($category_id = 2)
              @foreach($videos_2 as $video)
              <li>
                <a href='{{ route("video.show", ["id" =>  $video->id]) }}' class="text-center">
                  {{ $video->id }}:
                  {{ $video->title }}
                </a>
              </li>
              @endforeach

            @elseif($category_id = 3)
              @foreach($videos_3 as $video)
              <li>
                <a href='{{ route("video.show", ["id" =>  $video->id]) }}' class="text-center">
                  {{ $video->id }}:
                  {{ $video->title }}
                </a>
              </li>
              @endforeach
            @endif

          </ul>
        </div>

        

      </div>

      <div class="row">
        <p>{{ $video->detail }}</p>
      </div>
      <div class="row">
        <p>{{ $video->content }}</p>
      </div>
    </div>

    <div class="container">
      <div class="row mt-5">
        <div class="">
          <a href="{{ route('video.index') }}" class="btn btn-info">一覧に戻る</a>
        </div>
        <div class="">
          <a href='{{ route("video.show", ["id" =>  $video->id+1]) }}' class="btn btn-info">次の動画へ</a>
        </div>
      </div>
    </div>

  </main>

  <script src="{{ asset('/js/video.js') }}"></script>

@endsection
