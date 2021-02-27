@extends('layout')

@section('content')

<div class="container">
  <h2>動画</h2>
  <p>{{ $message }}</p>
</div>

@can('system-only')

<div class="container">

<table>
@foreach ($videos as $video)
  
  

    

  <tr>
    <td class="article__id">
      {{ $video->id }}:
    </td>
    <td class="article__title">
      <a href='{{ route("video.show", ["id" =>  $video->id]) }}'>
        {{ $video->title }}
      </a>
    </td>

    @can('system-only')
    <td class="ml-3 article__btn">
      <span>
        {{ Form::open(['method' => 'delete', 'route' => ['video.delete', $video->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
      </span>

      <span>
        {{ Form::open(['method' => 'delete', 'route' => ['video.delete', $video->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
      </span>
    </td>
    @endcan
  </tr>

@endforeach
</table>
</div>

<div class="container">
  <div>
    <a href={{ route('video.new') }}>新規投稿</a>
  </div>
</div>


@endcan

@endsection
