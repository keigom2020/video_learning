@extends('layout')

@section('content')

<div class="container">

        <div class="row">
          <h2>コース一覧</h2>
        </div>

        <div class="row mt-4">

          <div class="col-sm-3 col-xl-3">
            <div class="card shadow-sm">
              <img src="https://placehold.jp/264x180.png" alt="">
              <div class="card-body">
                <h5 class="card-title">保険</h5>
                <p class="card-text">XXXについて動画で学習します。</p>
                <a href="/course/insurance" class="btn btn-info">チャプターの一覧</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xl-3">
            <div class="card shadow-sm">
              <img src="https://placehold.jp/264x180.png" alt="">
              <div class="card-body">
                <h5 class="card-title">不動産</h5>
                <p class="card-text">XXXについて動画で学習します。</p>
                <a href="/course/realestate" class="btn btn-info">チャプタの一覧</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xl-3">
            <div class="card shadow-sm">
              <img src="https://placehold.jp/264x180.png" alt="">
              <div class="card-body">
                <h5 class="card-title">証券</h5>
                <p class="card-text">XXXについて動画で学習します。</p>
                <a href="/course/stock" class="btn btn-info">チャプタの一覧</a>
              </div>
            </div>
          </div>

        </div>
      </div>


@endsection('content')
