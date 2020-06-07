import '@p-assets/js/bootstrap'

import {
    InertiaApp
} from '@inertiajs/inertia-svelte'

const app = document.getElementById( 'app' )

new InertiaApp( {
    target: app,
    props: {
        initialPage: JSON.parse( app.dataset.page ),
        resolveComponent: name => import( /* webpackChunkName: "js/user-dashboard-" */ `./Pages/${name}.svelte` ).then( module => module.default ),
    },
} )
