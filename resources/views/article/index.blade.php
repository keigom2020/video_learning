@extends('layout')

@section('content')

<div class="container">
  <h2>記事</h2>
  {{-- <p>{{ $message }}</p> --}}
</div>

@can('system-only')

<div class="container">
  <div>
    <a href={{ route('article.new') }} class="btn btn-info">新規投稿</a>
  </div>
</div>

@endcan

<div class="container mt-4 mb-4">
<table>
@foreach ($articles as $article)

  <tr id='{{ $article->id }}'>
    <td class="article__id">
      {{ $article->id }}:
    </td>
    <td class="article__title">
      <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
        {{ $article->title }}
      </a>
      <br>
      <span>{{ $article->updated_at }}</span>
    </td>

    @can('system-only')

    <td class="ml-3 article__btn">
      <span>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
      </span>

      <a href={{ route('article.edit', ["id" =>  $article->id]) }} class='btn btn-outline-primary'>編集</a>
    </td>

    @endcan

  </tr>

@endforeach
</table>
</div>

@can('system-only')

<div class="container">
  <div>
    <a href={{ route('article.new') }} class="btn btn-info">新規投稿</a>
  </div>
</div>

@endcan


@endsection
