@extends('layout')

@section('content')

<div class="container">
  <h2>記事</h2>
  <p>{{ $message }}</p>
</div>

@foreach ($articles as $article)
  
  <div class="container">
    <p>
      <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
        {{ $article->id }}:
        {{ $article->title }}
      </a>
    </p>
  </div>

@endforeach

<div class="container">
  <div>
    <a href=''>新規投稿</a>
  </div>
</div>

<router-view />

@endsection
