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

@endsection('content')
