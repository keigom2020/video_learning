@extends('layout')

@section('content')

<main id="top">

  <div class="container">

    <div class="row">
      <h2 class="mx-auto">VideoLearning</h2>
    </div>
    <div class="row">
      <h3 class="mx-auto text-center">動画で学習する<br>プラットフォーム。</h3>
    </div>
    
    <section class="mt-4">
  　　  
        @guest
          <div class="row mx-auto text-center mt-3">
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

</main>



@endsection('content')
