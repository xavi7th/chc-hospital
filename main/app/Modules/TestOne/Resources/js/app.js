/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Svelte and other libraries. It is a great starting point when
 * building robust, powerful web applications using Svelte and Laravel.
 */

// require('./bootstrap');

import {
    InertiaApp
} from '@inertiajs/inertia-svelte'

const app = document.getElementById( 'app' )

new InertiaApp( {
    target: app,
    props: {
        initialPage: JSON.parse( app.dataset.page ),
        resolveComponent: name => import( `./Pages/${name}.svelte` ).then( module => module.default ),
    },
} )
