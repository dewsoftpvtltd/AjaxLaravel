var elixir = require('laravel-elixir');
var bowerFiles = require('main-bower-files');



elixir(function(mix) {
    mix.sass('app.scss');
    mix.sass('sweetalert.scss');

    mix.scripts([
                'jquery/dist/jquery.min.js',
                'bootstrap-sass/assets/javascripts/bootstrap.min.js',
                'sweetalert/dist/sweetalert.min.js'
                ],'public/js/3rd-party.js', 'bower_components');


    mix.scriptsIn('', 'public/js/app.js');
});