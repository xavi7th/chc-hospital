const mix = require('laravel-mix');

mix.webpackConfig({
	resolve: {
		extensions: ['.js', '.svelte', '.json'],
		alias: {
			'@p-pages': __dirname + '/Resources/js/Pages',
			'@p-shared': __dirname + '/Resources/js/Shared',
			'@p-assets': __dirname + '/Resources'
		},
	},
})

mix.copyDirectory(__dirname + '/Resources/img', 'public_html/img');
mix.copyDirectory(__dirname + '/Resources/fonts', 'public_html/fonts');

mix.scripts([
        __dirname + '/Resources/js/vendor/lightbox-plus-jquery.min.js',
        __dirname + '/Resources/js/vendor/jquery-1.11.1.min.js',
        __dirname + '/Resources/js/vendor/bootstrap.min.js',
        __dirname + '/Resources/js/vendor/jquery.bxslider.min.js',
        __dirname + '/Resources/js/vendor/jquery.appear.js',
        __dirname + '/Resources/js/vendor/jquery.countTo.js',
        __dirname + '/Resources/js/vendor/owl.carousel.min.js',
        __dirname + '/Resources/js/vendor/validate.js',
        __dirname + '/Resources/js/vendor/jquery.mixitup.min.js',
        __dirname + '/Resources/js/vendor/jquery.fancybox.pack.js',
        __dirname + '/Resources/js/vendor/jquery.easing.min.js',
        __dirname + '/Resources/js/vendor/isotope.pkgd.min.js',
        __dirname + '/Resources/js/vendor/jquery-ui.js',
        __dirname + '/Resources/js/vendor/jquery.themepunch.tools.min.js',
        __dirname + '/Resources/js/vendor/jquery.themepunch.revolution.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.actions.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.carousel.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.kenburn.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.layeranimation.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.migration.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.navigation.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.parallax.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.slideanims.min.js',
        __dirname + '/Resources/js/vendor/revolution.extension.video.min.js',
    ], 'public_html/js/admin-app-vendor.js');

mix.scripts(__dirname + '/Resources/js/vendor/custom.js', 'public_html/js/app-init-06-06-20.js');

mix.js(__dirname + '/Resources/js/app.js', 'js/app.js')
