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

// mix.webpackConfig( {
//     entry: {
//         main: [
//             './main/app/Modules/PublicPages/Resources/sass/app.scss',
//             './main/app/Modules/AppUser/Resources/sass/app.scss',
//             './main/app/Modules/TestOne/Resources/sass/app.scss'
//         ]
//     }
// } );

mix.options( {
        // processCssUrls: false,
        fileLoaderDirs: {
            images: 'img'
        },
        postCss: [
            require( 'postcss-fixes' )(), // add fallbacks for rem units and other fixes
            require( 'cssnano' )( {
                'calc': false // already included in postcss-fixes
            } ),
        ]
    } )
    .mergeManifest()
    .version();
