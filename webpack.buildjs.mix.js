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

const mix = require( 'laravel-mix' );
require( 'laravel-mix-svelte' );

mix.setPublicPath( './public_html' );

let fs = require( 'fs-extra' );

let modules = fs.readdirSync( './main/app/Modules' ); // Make sure the path of your modules are correct

if ( modules && modules.length > 0 ) {
    modules.forEach( ( module ) => {
        let path = `./main/app/Modules/${module}/webpack.mix.js`;
        if ( fs.existsSync( path ) ) {
            require( path );
        }
    } );
}

mix.babelConfig( {
    plugins: [ '@babel/plugin-syntax-dynamic-import' ],
} );

mix
    .options( {
        output: {
            // chunkFilename: 'js/[name].js?id=[chunkhash]',
            chunkFilename: 'js/[name].[chunkhash].js',

        },
        fileLoaderDirs: {
            images: 'img'
        },
    } )
    .svelte( {
        dev: !mix.inProduction(),
        css: true
    } )
    .extract()
    .mergeManifest()
    .version()

if ( !mix.inProduction() ) {
    mix.sourceMaps()
}
