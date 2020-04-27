<?php

namespace App\Modules\PublicPages\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Modules\AppUser\Models\AppUser;
use App\Modules\SuperAdmin\Models\SuperAdmin;
use App\Modules\AppUser\Http\Controllers\LoginController;

class PublicPagesController extends Controller
{
	public function __construct()
	{
		Inertia::setRootView('publicpages::app');
	}

	static function routes()
	{
		LoginController::routes();

		Route::group(['middleware' => 'web', 'namespace' => '\App\Modules\PublicPages\Http\Controllers'], function () {

			/**
			 * ! Matches all routes except routes that start with the list provided.
			 */
			Route::get('/{subcat?}', 'PublicPagesController@index')->where('subcat', '^((?!(api|' .
				SuperAdmin::DASHBOARD_ROUTE_PREFIX . '|' . Admin::DASHBOARD_ROUTE_PREFIX . '|' . AppUser::DASHBOARD_ROUTE_PREFIX .
				'|tinker|_debugbar|css|js|_ignition|ignition-vendor)).)*')->name('app.home');
		});
	}

	public function index(Request $request)
	{
		Auth::logout();
		return Inertia::render('App', [
			'event' => 'bar'
		]);
	}
}
