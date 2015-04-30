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
    mix.styles(
        'bootstrap.min.css'
    );

    mix.scripts([
        'bootstrap.min.js',
        'e-rapor.js',
        'highcharts.js'
    ]);

    mix.version([
        'public/css/all.css',
        'public/js/all.js'
    ]);
});
