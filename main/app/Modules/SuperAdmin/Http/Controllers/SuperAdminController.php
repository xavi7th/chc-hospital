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
use App\Modules\SuperAdmin\Models\TeamMember;
use App\Modules\PublicPages\Models\UploadedDocument;
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
          Route::delete('/{uploadedDocument}', 'SuperAdminController@deleteUploadedDocument')->name('superadmin.delete_cv');
          Route::get('/view-team-members', 'SuperAdminController@viewTeamMembers')->name('superadmin.team_members')->defaults('ex', self::__e(false, 'users'));
          Route::get('/new-team-member', 'SuperAdminController@viewCreateTeamMemberPage')->name('superadmin.new_team_member')->defaults('ex', self::__e(false, 'user'));
          Route::post('/create-team-member', 'SuperAdminController@createTeamMember')->name('superadmin.create_team_member')->defaults('ex', self::__e(false, 'users'));
          Route::delete('/{teamMember}', 'SuperAdminController@deleteTeamMember')->name('superadmin.delete_team_member');
          Route::get('/job-listings', 'SuperAdminController@viewJobListings')->name('superadmin.job_listings')->defaults('ex', self::__e(false, 'briefcase'));
          Route::get('/new-job-listing', 'SuperAdminController@viewCreateJobListingPage')->name('superadmin.new_job_listing')->defaults('ex', self::__e(false, 'briefcase'));
          Route::post('/create-job-listing', 'SuperAdminController@createJobListing')->name('superadmin.create_job_listing')->defaults('ex', self::__e(true, 'briefcase'));
          Route::delete('/{jobListing}', 'SuperAdminController@deleteJobListing')->name('superadmin.delete_job_listing');
        });
      });
    });
  }


  /**
   * Display a listing of the resource.
   * @return Response
   */
  public function index()
  {
    return Inertia::render('Dashboard')->withViewData([
      'title' => config('app.name') . ' Admin Dashboard'
    ]);
  }

  public function viewCVs()
  {
    return Inertia::render('ManageCVs', [
      'uploadedCVs' => UploadedDocument::all()
    ]);
  }

  public function deleteUploadedDocument(UploadedDocument $uploadedDocument)
  {
    $uploadedDocument->delete();
    return back()->withSuccess('CV deleted');
  }

  public function viewTeamMembers()
  {
    return Inertia::render('ManageTeamMembers', [
      'teamMembers' => TeamMember::all()
    ]);
  }

  public function viewCreateTeamMemberPage()
  {
    return Inertia::render('CreateTeamMember');
  }

  public function createTeamMember(Request $request)
  {
    // dd($request->all());
    $validator = Validator::make($request->all(), [
      'name' => 'required|max:30',
      'email' => 'required|email',
      'job_title' => 'required|max:150',
      'phone' => 'required|max:20',
      'job_description' => 'required|string',
      'profile_photo' => 'required|file|mimes:jpeg,bmp,png,jpg,gif',
    ]);

    if ($validator->fails()) {
      return back()
        ->withErrors($validator)
        ->withError('There are errors in your form!');
    }

    $img_url = compress_image_upload('profile_photo', '/img/profile-photos/', '/img/profile-photos/thumbs/',  1400, true);
    TeamMember::create(collect($validator->validated())->merge($img_url)->toArray());

    return back()->withSuccess('Team member profile created');
  }

  public function deleteTeamMember(TeamMember $teamMember)
  {
    $teamMember->delete();
    return back()->withSuccess('Profile deleted');
  }

  public function viewJobListings(Request $request)
  {
    return Inertia::render('ManageJobListings', [
      'jobListings' => JobListing::latest()->get()
    ]);
  }

  public function viewCreateJobListingPage(Request $request)
  {
    return Inertia::render('CreateJobListing');
  }

  public function createJobListing(Request $request)
  {

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

  public function deleteJobListing(JobListing $jobListing)
  {
    $jobListing->delete();
    return back()->withSuccess('Job listing deleted');
  }
}
