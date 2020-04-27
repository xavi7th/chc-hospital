<?php

use App\Modules\Admin\Models\Admin;
use App\Modules\SuperAdmin\Models\SuperAdmin;
use App\Modules\AppUser\Models\AppUser;

return [
	// 'whitelist' => ['home', 'api.*'],
	/**
	 * !Blacklist hidden routes from the general @routes call
	 * ? Access the blacklisted routes using group routes
	 * * @routes('admin'), @routes(['admin', 'superadmin]), @routes('*')
	 */
	'blacklist' => ['debugbar.*', 'horizon.*', 'ignition.*', 'admin.*', 'superadmin.*'],
	'groups' => [
		'admin' => [
			'admin.*'
		],
		'superadmin' => [
			'superadmin.*',
			'admin.*',
			'appuser.*',
			'app.*',
		],
		'appuser' => [
			'appuser.*',
		],
		'public' => [
			'app.*',
		],
	],
];
