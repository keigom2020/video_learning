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
        
        @yield('content')    

      </div>

      <script src="/js/app.js"></script>
      <script src="https://player.vimeo.com/api/player.js"></script>
    </body>
</html>
