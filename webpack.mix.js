let mix = require('laravel-mix');

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

mix.css(['resources/assets/css/bootstrap.css' , 'resources/assets/css/all.css' ] , 'include/css/app.css')
   .js(['resources/assets/js/all.js'] , 'include/js/app.js')
   .sass('resources/assets/sass/app.scss', 'include/css/app.css');
