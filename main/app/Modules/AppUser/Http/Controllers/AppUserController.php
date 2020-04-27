<?php

namespace App\Modules\AppUser\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Modules\AppUser\Models\AppUser;

class AppUserController extends Controller
{
	public function __construct()
	{
		Inertia::setRootView('appuser::app');
	}


	static function routes()
	{
		Route::group(['middleware' => ['web', 'auth'], 'namespace' => '\App\Modules\AppUser\Http\Controllers'], function () {
			Route::prefix(AppUser::DASHBOARD_ROUTE_PREFIX)->group(function () {
				Route::get('/', 'AppUserController@index')->name('appuser.dashboard');
			});
		});
	}


	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index(Request $request)
	{
		// Auth::logout();
		return Inertia::render('App', [
			'event' => $request->only(
				'id',
				'title',
				'start_date',
				'description'
			),
		]);
	}
}
