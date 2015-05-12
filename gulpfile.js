var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles('jquery.dataTables.css',
    'public/css/app.css');

    mix.scripts([
        'bootstrap.min.js',
        'e-rapor.js',
        'highcharts.js'
    ], 'public/js/app.js');

    mix.version([
        'public/css/app.css',
        'public/js/app.js'
    ]);
});
