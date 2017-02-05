const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// mix.combine([
//     'public/css/vendor/normalize.css',
//     'public/css/vendor/videojs.css'
// ], 'public/css/all.css');

mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
mix.copy('node_modules/bootstrap/fonts', 'public/fonts');

mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/jquery-ui-dist/jquery-ui.min.js', 'public/js/jquery-ui.min.js');
mix.copy('node_modules/jquery-ui-dist/jquery-ui.min.css', 'public/css/jquery-ui.min.css');
mix.copy('resources/assets/js/sb-admin-2.js', 'public/js/sb-admin-2.js');
mix.copy('node_modules/metisMenu/dist/metisMenu.min.js', 'public/js/metisMenu.min.js');

//
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.copy('node_modules/metismenu/dist/metisMenu.min.css', 'public/css/metisMenu.min.css');
mix.copy('resources/assets/css/sb-admin-2.css', 'public/css/sb-admin-2.css');
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');