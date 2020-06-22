<?php

namespace App\Modules\SuperAdmin\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Modules\SuperAdmin\Models\SuperAdmin;
use App\Modules\SuperAdmin\Http\Controllers\LoginController;


class SuperAdminController extends Controller
{
  public function __construct()
  {
    Inertia::setRootView('superadmin::app');
  }


  static function routes()
  {
    Route::group(['middleware' => ['web'], 'namespace' => '\App\Modules\SuperAdmin\Http\Controllers'], function () {


      Route::prefix(SuperAdmin::DASHBOARD_ROUTE_PREFIX)->group(function () {
        LoginController::routes();

        // Route::group(['middleware' => ['auth:super_admin']], function () {

        Route::get('/', 'SuperAdminController@index')->name('superadmin.dashboard');
        // });
      });
    });
  }


  /**
   * Display a listing of the resource.
   * @return Response
   */
  public function index(Request $request)
  {
    return Inertia::render('Dashboard')->withViewData([
      'title' => config('app.name') . ' Admin Dashboard'
    ]);
  }
}
