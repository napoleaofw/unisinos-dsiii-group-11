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

mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css', 'public/vendor/fontawesome-free/css/all.min.css');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/webfonts/fa-brands-400.woff2', 'public/vendor/fontawesome-free/webfonts/fa-brands-400.woff2');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/webfonts/fa-solid-900.woff', 'public/vendor/fontawesome-free/webfonts/fa-solid-900.woff');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/webfonts/fa-solid-900.woff2', 'public/vendor/fontawesome-free/webfonts/fa-solid-900.woff2');
mix.copy('node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css', 'public/vendor/startbootstrap-sb-admin-2/css/sb-admin-2.min.css');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css', 'public/vendor/datatables/dataTables.bootstrap4.min.css');

mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js', 'public/vendor/jquery/jquery.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/vendor/bootstrap/js/bootstrap.bundle.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js', 'public/vendor/jquery-easing/jquery.easing.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.min.js', 'public/vendor/startbootstrap-sb-admin-2/js/sb-admin-2.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js', 'public/vendor/datatables/jquery.dataTables.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js', 'public/vendor/datatables/dataTables.bootstrap4.min.js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');