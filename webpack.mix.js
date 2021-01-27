const mix = require('laravel-mix');
const autoPreprocess = require('svelte-preprocess');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
require('laravel-mix-svelte');
require('laravel-mix-bundle-analyzer');
// require('laravel-mix-purgecss');
let fs = require('fs-extra');
let modules = fs.readdirSync('./main/app/Modules');

if (modules && modules.length > 0) {
	modules.forEach((module) => {
		let path = `./main/app/Modules/${module}/webpack.mix.js`;
		if (fs.existsSync(path)) {
			require(path);
		}
	});
}

mix.setPublicPath('./public_html');

mix.babelConfig({
	plugins: ['@babel/plugin-syntax-dynamic-import'],
});

mix.webpackConfig({
	output: {
		filename: mix.inProduction() ? "[name].[contenthash].js" : "[name].[hash].js",
			chunkFilename: mix.inProduction() ? "[name].[contenthash].js" : "[name].[hash].js",
	},
	plugins: [
    new CleanWebpackPlugin({
			dry: false,
			cleanOnceBeforeBuildPatterns: ['js/*', './*.js', 'robots.txt', 'mix-manifest.json', 'css/*', 'img/*', 'fonts/*']
		}),
    ]
});
mix.options({
		fileLoaderDirs: {
			images: 'img'
		},
		postCss: [
      require('postcss-fixes')(),
      require('cssnano')({
				discardComments: {
					removeAll: true
				},
				normalizeWhitespace: mix.inProduction(),
				calc: false,
				cssDeclarationSorter: true
			}),
  ]
	})
	.svelte({
		dev: !mix.inProduction(),
		css: true,
		preprocess: autoPreprocess(),
		onwarn: (warning, handler) => {
			const {
				code,
				frame
			} = warning;

			if (code == "anchor-is-valid" || code == "a11y-invalid-attribute") {
				return
			}
			if (code == "css-unused-selector") {
				return
			}
			if (code == 'css-unused-selector' && frame.includes('sweetalert')) {
				return
      }
      if (code == 'missing-declaration' && frame.includes('route')) {
      	return
      }

			console.log(
				'\x1b[41m%s\x1b[0m',
				code
			)

			handler(warning);
		}
	})
	.extract()
	.then(() => {
		var crypto = require("crypto");
		const _ = require('lodash')
		const saltCssId = crypto.randomBytes(7)
			.toString('hex');
		let oldManifestData = JSON.parse(fs.readFileSync('./public_html/mix-manifest.json', 'utf-8'))
		let newManifestData = {};

		console.log(
			'\x1b[41m%s\x1b[0m',
			saltCssId
		)

		_.map(oldManifestData, (actualFilename, mixKeyName) => {
			if (_.startsWith(mixKeyName, '/css')) {
				newManifestData[mixKeyName] = actualFilename + '?' + saltCssId;
			} else {
				let newMixKeyName = _.split(mixKeyName, '.')
					.tap(o => {
						_.pullAt(o, 1);
					})
					.join('.')

				/** If the js extension has been stripped we add it back */
				newMixKeyName = _.endsWith(newMixKeyName, '.js') ? newMixKeyName : newMixKeyName + '.js'

				newManifestData[newMixKeyName] = actualFilename;
			}

		});

		let data = JSON.stringify(newManifestData, null, 2);
		fs.writeFileSync('./public_html/mix-manifest.json', data);
	})

if (!mix.inProduction()) {
	mix.sourceMaps()
}

if (mix.inProduction()) {
	mix.bundleAnalyzer();
}

// mix.browserSync({
//   proxy:'romzynew.test/login',
//   // Disable UI completely
//   // ui: false,
//   // files: [
//   //   "wp-content/themes/**/*.css",
//   //   {
//   //       match: ["wp-content/themes/**/*.php"],
//   //       fn:    function (event, file) {
//   //           /** Custom event handler **/
//   //       }
//   //   }
//   // ],
//   // ghostMode: {
//   //   clicks: true,
//   //   forms: true,
//   //   scroll: false
//   // },
//   // notify: false,
//   // reloadDelay: 2000,
//   // // Don't append timestamps to injected files
//   // timestamps: false
// })
