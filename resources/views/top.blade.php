@extends('layout')

@section('content')

<div class="container" id="top">

  <div class="row">
    <h2 class="mx-auto heading__lv2">VideoLearning</h2>
  </div>
  <div class="row">
    <h3 class="mx-auto text-center heading__lv3">動画で学習する<br>プラットフォーム。</h3>
  </div>

  <section class="mt-5 pb-4 layer">
  　　  
      @guest
        <div class="row mx-auto text-center">
          <a class="btn btn-info mx-auto nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
        </div>        
        @if (Route::has('register'))
          <div class="row mx-auto text-center mt-3">
            <a class="btn btn-info mx-auto nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
          </div>        
        @endif

        @else

          <div class="nav-item dropdown">
            ようこそ{{ Auth::user()->name }} さん
          </div>

      @endguest

  </section>

</div>

<div class="top_bg"></div>



@endsection('content')
