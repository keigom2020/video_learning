@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <h2 class="mx-auto">VideoLearning</h2>
  </div>
  <div class="row">
    <h3 class="mx-auto text-center">動画で学習する<br>プラットフォーム。</h3>
  </div>
  
  <section class="mt-4">
    <div class="row mx-auto text-center">
      <a href="/register" class="btn btn-info mx-auto">
          新規登録する
      </a>
    </div>

    <div class="row mx-auto text-center  mt-3">
      <a href="/login" class="btn btn-info mx-auto">
          ログインする
      </a>
    </div>
  </section>
</div>

@endsection('content')
