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

var bowerDirectory = './resources/assets/bower/';

elixir(function(mix) {
    mix.scripts([
    		'vue/dist/vue.min.js',
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js'
            ], 'public/js/all.js', bowerDirectory);

    mix.styles([
       'bootstrap/dist/css/bootstrap.min.css'
    ], 'public/css/all.css', bowerDirectory);
});