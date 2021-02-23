@extends('layout')

@section('content')

<div class="container">
  <h2>動画</h2>
</div>

@can('system-only')

{{-- @foreach ($videos as $video) --}}
@foreach ($browsing_histories as $browsing_history)
  
  <div class="container">
    <p>

      {{--
      <a href='{{ route("video.show", ["id" =>  $video->id]) }}'>
        {{ $video->id }}:
        {{ $video->title }}
      </a>
      --}}

      {{-- 
      <a href=''>
        {{ $browsing_history->state_button }}:
      </a> 
      --}}
    </p>

    @if($browsing_history->state_button == 1)
    <p>視聴済みにする</p>

      @else
      <p>未視聴に戻す</p>

    @endif

    {{-- <a href={{ route('video.delete') }}>削除</a> --}}

    {{--
    <p>
      {{ $videos->users() }}
    </p>
    --}}

    
  </div>

@endforeach

<div class="container">
  <div>
    <a href={{ route('video.new') }}>新規投稿</a>
  </div>
</div>


@endcan

@endsection
