<?php

namespace App\Modules\SuperAdmin\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Modules\SuperAdmin\Models\JobListing;
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

        Route::group(['middleware' => ['auth:super_admin']], function () {
          Route::get('/', 'SuperAdminController@index')->name('superadmin.dashboard')->defaults('ex', self::__e(false, 'desktop'));
          Route::get('/view-cvs', 'SuperAdminController@viewCVs')->name('superadmin.manage_cvs')->defaults('ex', self::__e(false, 'comment'));
          Route::get('/view-team-members', 'SuperAdminController@viewTeamMembers')->name('superadmin.team_members')->defaults('ex', self::__e(false, 'users'));
          Route::get('/view-team-members', 'SuperAdminController@viewCreateTeamMemberPage')->name('superadmin.new_team_member')->defaults('ex', self::__e(false, 'users'));
          Route::get('/job-listings', 'SuperAdminController@viewJobListings')->name('superadmin.job_listings')->defaults('ex', self::__e(false, 'briefcase'));
          Route::get('/new-job-listing', 'SuperAdminController@viewCreateJobListingPage')->name('superadmin.new_job_listing')->defaults('ex', self::__e(false, 'briefcase'));
          Route::post('/create-job-listing', 'SuperAdminController@createJobListing')->name('superadmin.create_job_listing')->defaults('ex', self::__e(true, 'briefcase'));
        });
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

  public function viewCVs(Request $request)
  {
    return Inertia::render('ManageCVs');
  }

  public function viewTeamMembers(Request $request)
  {
    return Inertia::render('ManageTeamMembers');
  }

  public function viewCreateTeamMemberPage(Request $request)
  {
    return Inertia::render('CreateTeamMember');
  }

  public function viewJobListings(Request $request)
  {
    return Inertia::render('ManageJobListings');
  }

  public function viewCreateJobListingPage(Request $request)
  {
    return Inertia::render('CreateJobListing');
  }

  public function createJobListing(Request $request)
  {
    // dd($request->all());

    $validator = Validator::make($request->all(), [
      'contract_type' => 'required|max:20',
      'job_location' => 'required|max:20',
      'job_title' => 'required|max:150',
      'job_description' => 'required|string',
    ]);

    if ($validator->fails()) {
      return back()
        ->withErrors($validator)
        ->withError('There are errors in your form!');
    }


    JobListing::create($validator->validated());

    return back()->withSuccess('Job listing created');
  }
}
