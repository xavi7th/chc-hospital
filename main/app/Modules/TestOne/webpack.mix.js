const dotenvExpand = require( 'dotenv-expand' );
const config = require( 'dotenv' ).config( {
    path: __dirname + '/../../../.env',
    debug: true
} );
dotenvExpand( config );

console.log( config );


const mix = require( 'laravel-mix' );
require( 'laravel-mix-merge-manifest' );

// mix.setPublicPath('../../public').mergeManifest();

mix.js( __dirname + '/Resources/js/app.js', 'js/testone.js' )
    .sass( __dirname + '/Resources/sass/app.scss', 'css/testone.css' );

if ( mix.inProduction() ) {
    mix.version();
}
