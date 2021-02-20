const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/ui.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', {
      implementation: require('dart-sass')
    })
    .version()

mix.browserSync({
    files: [
      "public/**/*.*"
    ],
    proxy: 'http://localhost:8000'
});