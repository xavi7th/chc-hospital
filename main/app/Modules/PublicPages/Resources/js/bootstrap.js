window._ = require('lodash');
window.swal = require('sweetalert2')

window.Toast = swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 2000,
	icon: "success"
});

window.BlockToast = swal.mixin({
	showConfirmButton: true,
	showCloseButton: false,
	allowOutsideClick: false,
	allowEscapeKey: false,
	onBeforeOpen: () => {
		swal.showLoading()
	}
});

window.ToastLarge = swal.mixin({
	icon: "success",
	title: 'To be implemented!',
	html: 'I will close in <b></b> milliseconds.',
	timer: 3000,
	timerProgressBar: true,
	onBeforeOpen: () => {
		swal.showLoading()
		// timerInterval = setInterval( () => {
		//     const content = swal.getContent()
		//     if ( content ) {
		//         const b = content.querySelector( 'b' )
		//         if ( b ) {
		//             b.textContent = Swal.getTimerLeft()
		//         }
		//     }
		// }, 100 )
	},
	// onClose: () => {
	//     clearInterval( timerInterval )
	// }
});

window.swalPreconfirm = swal.mixin({
	title: 'Are you sure?',
	text: "Implement this when you call the mixin",
	icon: 'question',
	showCloseButton: false,
	allowOutsideClick: () => !swal.isLoading(),
	allowEscapeKey: false,
	showCancelButton: true,
	focusCancel: true,
	cancelButtonColor: '#d33',
	confirmButtonColor: '#3085d6',
	confirmButtonText: 'To be implemented',
	showLoaderOnConfirm: true,
	preConfirm: () => {
		/** Implement this when you call the mixin */
	},
})
/**
 * Implement this when you call the mixin
 * .then( ( result ) => {} );
 */

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

import {
	InertiaApp
} from '@inertiajs/inertia-svelte'

const app = document.getElementById('app')

new InertiaApp({
	target: app,
	props: {
		initialPage: JSON.parse(app.dataset.page),
		resolveComponent: name => import( 
			/* webpackChunkName: "js/[request]" */
				/* webpackPrefetch: true */
				`./Pages/${name}.svelte`)
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
