@extends('layout')

@section('content')

<div class="container">
  <h2>マイページ</h2>
  <p>
    {{ Auth::user()->name }} のマイページ
  </p>
</div>

<div class="container">
  <h2>最近視聴した動画</h2>
  <p>
    
  </p>
</div>

<div class="container">
  <h2>メニュー</h2>
  
  <div class="row">
    <a href={{ route('courses') }}>コース一覧へ</a>
  </div>
</div>

@endsection('content')
