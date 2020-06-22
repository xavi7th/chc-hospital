const mix = require('laravel-mix');

mix.webpackConfig({
	resolve: {
		extensions: ['.js', '.svelte', '.json'],
		alias: {
			'@s-pages': __dirname + '/Resources/js/Pages',
			'@s-shared': __dirname + '/Resources/js/Shared',
			'@s-assets': __dirname + '/Resources'
		},
	},
})

if (['buildcss'].includes(process.env.npm_config_section)) {
	mix.copyDirectory(__dirname + '/Resources/img', 'public_html/img');
	mix.copyDirectory(__dirname + '/Resources/fonts', 'public_html/fonts');

	mix.sass(__dirname + '/Resources/sass/app.scss', 'css/dashboard-app-22-06-2020.css');
} else {

	mix.scripts([
    __dirname + '/Resources/js/vendor/jquery-3.2.1.min.js',
    __dirname + '/Resources/js/vendor/popper.min.js',
    __dirname + '/Resources/js/vendor/bootstrap.min.js',
    __dirname + '/Resources/js/vendor/simplebar.min.js',
  ], 'public_html/js/dashboard-app-vendor.js');

	mix.scripts([
    __dirname + '/Resources/js/vendor/main.js',
	], 'public_html/js/dashboard-init-22-06-2020.js');

	mix.js(__dirname + '/Resources/js/app.js', 'js/dashboard-app.js')
}
