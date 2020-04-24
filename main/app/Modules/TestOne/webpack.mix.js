const dotenvExpand = require( 'dotenv-expand' );
const config = require( 'dotenv' ).config( {
    path: __dirname + '/../../../.env',
    // debug: true
} );
dotenvExpand( config );

// console.log( config );

const mix = require( 'laravel-mix' );
require( 'laravel-mix-merge-manifest' );

mix.webpackConfig( {
    resolve: {
        extensions: [ '.js', '.svelte', '.json' ],
        alias: {
            '@testone-pages': __dirname + '/Resources/js/Pages',
            '@testone-assets': __dirname + '/Resources'
        },
    },
} )


mix.js( __dirname + '/Resources/js/app.js', 'js/testone.js' )
    .sass( __dirname + '/Resources/sass/app.scss', 'css/testone.css' );
