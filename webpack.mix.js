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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/bootstrap/css/bootstrap.min.css')
    .postCss('resources/css/login/login.css', 'public/css/login/login.css')
    .postCss('node_modules/sweetalert2/dist/sweetalert2.min.css', 'public/sweetalert2/css/login/sweetalert2.min.css')
    .js('node_modules/sweetalert2/dist/sweetalert2.all.min.js', 'public/sweetalert2/js/sweetalert2.min.js')
    .js('resources/js/login/*', 'public/js/login/')
    /*.js('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/bootstrap/js/bootstrap.min.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js.map', 'public/bootstrap/js/bootstrap.bundle.js.map')*/;
