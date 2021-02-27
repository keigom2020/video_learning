@extends('layout')

@section('content')

<div class="container">
  <h2>記事</h2>
  <p>{{ $message }}</p>
</div>

<div class="container">
  <div>
    <a href={{ route('article.new') }} class="btn btn-info">新規投稿</a>
  </div>
</div>

<div class="container">
<table>
@foreach ($articles as $article)

  <tr>
    <td class="article__id">
      {{ $article->id }}:
    </td>
    <td class="article__title">
      <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
        {{ $article->title }}
      </a>
    </td>

    @can('system-only')

    <td class="ml-3 article__btn">
      <span>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
      </span>

      <span>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
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
    <a href={{ route('article.new') }} class="btn btn-info">新規投稿</a>
  </div>
</div>

@endsection
