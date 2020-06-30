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
use App\Modules\SuperAdmin\Models\BlogPost;

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
          Route::delete('/cv/{uploadedDocument}', 'SuperAdminController@deleteUploadedDocument')->name('superadmin.delete_cv');
          Route::get('/view-team-members', 'SuperAdminController@viewTeamMembers')->name('superadmin.team_members')->defaults('ex', self::__e(false, 'users'));
          Route::get('/new-team-member', 'SuperAdminController@viewCreateTeamMemberPage')->name('superadmin.new_team_member')->defaults('ex', self::__e(false, 'user'));
          Route::post('/create-team-member', 'SuperAdminController@createTeamMember')->name('superadmin.create_team_member')->defaults('ex', self::__e(false, 'users'));
          Route::delete('/team-member/{teamMember}', 'SuperAdminController@deleteTeamMember')->name('superadmin.delete_team_member');
          Route::get('/job-listings', 'SuperAdminController@viewJobListings')->name('superadmin.job_listings')->defaults('ex', self::__e(false, 'briefcase'));
          Route::get('/new-job-listing', 'SuperAdminController@viewCreateJobListingPage')->name('superadmin.new_job_listing')->defaults('ex', self::__e(false, 'briefcase'));
          Route::post('/create-job-listing', 'SuperAdminController@createJobListing')->name('superadmin.create_job_listing')->defaults('ex', self::__e(true, 'briefcase'));
          Route::delete('/job-listing/{jobListing}', 'SuperAdminController@deleteJobListing')->name('superadmin.delete_job_listing');



          Route::get('/blog-posts', 'SuperAdminController@viewBlogPosts')->name('superadmin.blog_posts')->defaults('ex', self::__e(false, 'edit'));
          Route::get('/blog-post/{blogPost}', 'SuperAdminController@viewBlogPost')->name('superadmin.blog_post')->defaults('ex', self::__e(true, 'edit'));
          Route::get('/blog-post/{blogPost}/edit', 'SuperAdminController@viewCreateBlogPostPage')->name('superadmin.blog_post.edit')->defaults('ex', self::__e(true, 'edit'));
          Route::put('/blog-post/{blogPost}/edit', 'SuperAdminController@editBlogPost')->name('superadmin.blog_post.edit')->defaults('ex', self::__e(true, 'edit'));
          Route::get('/new-blog-post', 'SuperAdminController@viewCreateBlogPostPage')->name('superadmin.new_blog_post')->defaults('ex', self::__e(false, 'edit'));
          Route::post('/create-blog-post', 'SuperAdminController@createBlogPost')->name('superadmin.create_blog_post');
          Route::delete('/blog-post/{blogPost}', 'SuperAdminController@deleteBlogPost')->name('superadmin.delete_blog_post');
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

  public function viewBlogPosts(Request $request)
  {
    return Inertia::render('ListBlogPosts', [
      'blogPosts' => BlogPost::latest()->get(['id', 'title', 'thumb_url', 'author', 'created_at'])
    ]);
  }

  public function viewBlogPost(BlogPost $blogPost)
  {

    return Inertia::render('ViewBlogPost', compact('blogPost'));
  }

  public function viewCreateBlogPostPage(Request $request, BlogPost $blogPost = null)
  {
    $blogPost = $blogPost ?? (object)[];
    $categories = BlogPost::select('category')->distinct()->get();
    return Inertia::render('CreateBlogPost', compact('blogPost', 'categories'));
  }

  public function createBlogPost(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'title' => 'required|max:100',
      'author' => 'required|max:30',
      'category' => 'required|max:20',
      'content' => 'required|string',
      'post_img' => 'required|file|mimes:jpeg,bmp,png,jpg,gif',
    ]);

    if ($validator->fails()) {
      return back()
        ->withErrors($validator)
        ->withError('There are errors in your form!');
    }

    $img_url = compress_image_upload('post_img', '/img/blog/', '/img/blog/thumbs/',  1400, true);
    // dd(collect($validator->validated())->except('content')->merge($img_url)->merge(['content' => strip_tags_content($request->content)])->toArray());
    BlogPost::create(collect($validator->validated())->except('content')->merge($img_url)->merge(['content' => strip_tags_content($request->content)])->toArray());

    return back()->withSuccess('Job listing created');
  }

  public function editBlogPost(Request $request)
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

    BlogPost::update($validator->validated());

    return back()->withSuccess('Job listing created');
  }

  public function deleteBlogPost(BlogPost $blogPost)
  {
    $blogPost->delete();
    return back()->withSuccess('Blog Post deleted');
  }
}
