<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>VideoLearning</title>
        @include('components.style-sheet')
    </head>
    <body>
      <div id="app">

        @include('components.header')

        @include('components.nav')
        
        <main>
          @yield('content')
        </main>

        @include('components.footer')

      </div>

      <script src="/js/app.js"></script>
      <script src="/js/ui.js"></script>
      <script src="https://player.vimeo.com/api/player.js"></script>
    </body>
</html>
