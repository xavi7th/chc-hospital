const mix = require( 'laravel-mix' );
require( 'laravel-mix-svelte' );

// mix.setPublicPath( './public_html' );

let glob = require( 'glob' );
let fs = require( 'fs-extra' );

let modules = fs.readdirSync( './app/Modules' ); // Make sure the path of your modules are correct

if ( modules && modules.length > 0 ) {
    modules.forEach( ( module ) => {
        let path = `./app/Modules/${module}/webpack.mix.js`;
        if ( fs.existsSync( path ) ) {
            require( path );
        }
    } );
}

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


mix.js( 'resources/js/app.js', 'public/js' )
    .sass( 'resources/sass/app.scss', 'public/css' )
    .options( {
        output: {
            chunkFilename: 'js/[name].js?id=[chunkhash]',
        },
        resolve: {
            alias: {
                '@': path.resolve( 'resources/js' )
            }
        }
    } )
    .svelte();

// mix
//     .sourceMaps()
// .options( {
//         // processCssUrls: false,
//         // purifyCss: {
//         //     paths: paths,
//         //     purifyOptions: {
//         //         whitelist: [ '*datepicker*', '*owl*', '*sweetalert*' ],
//         //         // extensions: ['html', 'php', 'js', 'php'],
//         //         info: true,
//         //         rejected: true,
//         //     }
//         // },
//         fileLoaderDirs: {
//             images: 'img',
//             // fonts: 'web-fonts'
//         },
//         postCss: [
//             require( 'postcss-fixes' )(), // add fallbacks for rem units and other fixes
//         ],
//         // plugins: [
//         //     new webpack.IgnorePlugin( /^\.\/locale$/, /moment$/ )
//         // ]
//     } )
//     .version();
// mix.extract();
