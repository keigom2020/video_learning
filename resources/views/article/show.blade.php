@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <h2 class="heading__lv2">
      {{ $article->id }}：{{ $article->title }}
    </h2>
  </div>
  <div class="row">
    <p>{{ $article->updated_at }}</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8" style="white-space: pre-wrap;">
      {{ $article->content }}
    </div>

    <div class="col-md-4">
      <h3 class="heading__lv3">記事の一覧</h3>
    </div>

  </div>

</div>

<div class="container">
  <div class="row mt-5">
    <div class="mr-4">
      <a href="{{ route('article.index') }}" class="btn btn-info">一覧に戻る</a>

      @can('system-only')
      <a href={{ route('article.edit', ["id" =>  $article->id]) }} class='btn btn-outline-primary'>編集</a>
      @endcan

    </div>

    <div class="">
      {{--
      <a href='{{ route("article.show", ["id" =>  $article->id+1]) }}' class="btn btn-info">次の記事へ</a>
      --}}
    </div>


  </div>
</div>


@endsection
