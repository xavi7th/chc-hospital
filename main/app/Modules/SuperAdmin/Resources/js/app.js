import '@p-assets/js/bootstrap'

import {
	InertiaApp
} from '@inertiajs/inertia-svelte'

const app = document.getElementById('app')

new InertiaApp({
	target: app,
	props: {
		initialPage: JSON.parse(app.dataset.page),
		resolveComponent: name => import( /* webpackChunkName: "js/super-admin-" */ `./Pages/${name}.svelte`)
			.then(module => module.default)
			.catch(err => {
				if (err.code == "MODULE_NOT_FOUND") {
					location.href = '/'
				} else {
					console.error(err);
				}
			}),
	},
})
