@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <h2 class="heading__lv2">
    {{--
      {{ $article->id }}：{{ $article->title }}
    --}}
    </h2>
    <p>{{ $message }}</p>
  </div>
  <div class="row">

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
    {{--
      {{ $article->content }}
    --}}
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
    </div>

    <div class="">
      {{--
      <a href='{{ route("article.show", ["id" =>  $article->id+1]) }}' class="btn btn-info">次の記事へ</a>
      --}}
    </div>


  </div>
</div>


@endsection
