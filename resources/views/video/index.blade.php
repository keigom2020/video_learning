@extends('layout')

@section('content')

<div class="container">
  <h2>動画</h2>
  <p>{{ $message }}</p>
</div>

@can('system-only')

@foreach ($videos as $video)
  
  <div class="container">
    <p>

      <a href='{{ route("video.show", ["id" =>  $video->id]) }}'>
        {{ $video->id }}:
        {{ $video->title }}
      </a>

{{--
    <a href={{ route('video.delete') }}>削除</a>
  --}}

    <span>
      {{ Form::open(['method' => 'delete', 'route' => ['video.delete', $video->id]]) }}
          {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
      {{ Form::close() }}
    </span>

    </p>
  </div>

@endforeach

<div class="container">
  <div>
    <a href={{ route('video.new') }}>新規投稿</a>
  </div>
</div>


@endcan

@endsection
