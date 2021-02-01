@extends('layout')

@section('content')

<div class="container">
  <h2>【管理者限定】動画を追加する</h2>
  <p class="alert">このページは管理者専用ページです。このページ、URLを他人に教えないで下さい。</p>
  <p>投稿者用URL：/admin/insert</p>
  <h3>新しい動画を投稿する</h3>
  <p>下記のフォームに必要な情報を入力して下さい</p>

  <p>{{ $message }}</p>
  <p>{{ $article->content }}</p>
  <p>{{ $article->user_name }}</p>
  
  <button class="btn btn-info">
    <a href="{{ route('article.list') }}" style="color: #fff; text-decoration: none;">一覧に戻る</a>
  </button>
</div>

@endsection
