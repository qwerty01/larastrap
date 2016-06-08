var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir.config.sourcemaps = false;

elixir(function (mix) {
	mix.sass([
		'app.scss'
	], 'resources/assets/css/sass.css');

	mix.browserify([
		'b_load.js'
	], 'resources/assets/js/browserify-load.js');

	mix.browserify([
		'b_head.js'
	], 'resources/assets/js/browserify-head.js');

	mix.styles([
		'sass.css',
		'font-awesome.css',
		'modern-business.css'
	]);

	mix.scripts([
		'browserify-load.js'
	], 'public/js/load.js');

	mix.scripts([
		'browserify-head.js'
	], 'public/js/head.js');
});
