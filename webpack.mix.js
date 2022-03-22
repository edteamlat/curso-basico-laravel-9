const mix = require('laravel-mix');

mix.browserSync('blog.test')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css/bootstrap.css')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);
