@extends('layout')

@section('content')

<div class="container">
  <h2>【管理者限定】動画を編集する</h2>
  <p class="alert">このページは管理者専用ページです。このページ、URLを他人に教えないで下さい。</p>
  <p>投稿者用URL：/admin/insert</p>
  <h3>動画の情報を編集する</h3>
  <p>下記、動画の一覧です。編集したい動画の「編集」ボタンをクリックしてください。</p>

  <p>{{ $message }}</p>
  <p>{{ $article->content }}</p>
  <p>{{ $article->user_name }}</p>
  
  <button class="btn btn-info">
    <a href="{{ route('article.list') }}" style="color: #fff; text-decoration: none;">一覧に戻る</a>
  </button>
</div>

@endsection
