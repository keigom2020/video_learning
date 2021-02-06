@extends('layout')

@section('content')

<div class="container">
  <h2>マイページ</h2>
  <p>
    {{ Auth::user()->name }} のマイページ
  </p>
</div>



@endsection('content')
