const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/scss/theme.scss', 'public/css')
    .browserSync({
        proxy: "http://localhost:8080",
        port: 3030
    })
    // .postCss('resources/css/app.css', 'public/css', [
    //     require('tailwindcss'),
    //     require('autoprefixer'),
    // ]);
