<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Video Learning</title>
        @include('layout.style-sheet')
    </head>
    <body>
      <div id="app">

        @include('layout.header')
        
        @include('layout.nav')

        @yield('content')

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
