const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss','public/css');
mix.styles('resources/sass/solar-bootstrap.scss','public/css/theme.css');
mix.js('resources/js/bootstrap.bundle.min.js','public/js/bootstrap.bundle.min.js');
mix.js('resources/js/custom.js','public/js/custom.js');
mix.js('resources/js/jquery.min.js','public/js/jquery.min.js');
mix.js('resources/js/prism.js','public/js/prism.js');
