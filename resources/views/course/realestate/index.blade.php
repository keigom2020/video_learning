@extends('layout')

@section('content')

<div class="container chapter">

  <h2 class="heading__lv2">
    コース：不動産コース
  </h2>

  <h2 class="heading__lv2">
    チャプター一覧
  </h2>

  <div class="row mt-4">

    <div class="card mb-3 mx-auto" style="max-width: 100％;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://placehold.jp/264x180.png" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">初級チャプター</h5>
            <small class="text-muted"></small>
            <p class="card-text">ここでは、〜概要を学習します。そして、〜確認します。</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            <a href={{ route('video.realestate.primary') }} class="btn btn-info">このチャプターを受講する</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3 mx-auto" style="max-width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://placehold.jp/264x180.png" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">中級チャプター</h5>
            <small class="text-muted"></small>
            <p class="card-text">ここでは、でする場合、方法について学習します。をと、のやをることができます。</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            <a href={{ route('video.realestate.medium') }} class="btn btn-info">このチャプターを受講する</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3 mx-auto" style="max-width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://placehold.jp/264x180.png" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">上級チャプター</h5>
            <small class="text-muted"></small>
            <p class="card-text">ここでは、に、のをします。と、のをことができます。</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            <a href={{ route('video.realestate.advanced') }} class="btn btn-info">このチャプターを受講する</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

@endsection('content')
