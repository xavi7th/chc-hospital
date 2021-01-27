<?php

namespace App\Modules\PublicPages\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Modules\SuperAdmin\Models\BlogPost;
use App\Modules\SuperAdmin\Models\JobListing;
use App\Modules\SuperAdmin\Models\TeamMember;
use App\Modules\PublicPages\Models\UploadedDocument;

class PublicPagesController extends Controller
{
  static function routes()
  {
    // LoginController::routes();
    Route::name('app.')->middleware('web')->group(function () {

      Route::get('/', [self::class, 'index'])->name('home')->defaults('ex', parent::__e(false));
      Route::get('/about-us', [self::class, 'showAboutPage'])->name('about_us');
      Route::get('/our-services', [self::class, 'showServicesPage'])->name('services');
      Route::get('/our-facilities', [self::class, 'showFacilitiesPage'])->name('facilities');
      Route::get('/work-with-us', [self::class, 'showCareerPage'])->name('career');
      Route::get('/news', [self::class, 'showNewsPage'])->name('news');
      Route::get('/news/category/{category?}', [self::class, 'showNewsPage'])->name('news.category')->defaults('ex', parent::__e(true));
      Route::get('/news/{blogPost:slug}', [self::class, 'showNewsPostPage'])->name('news.post')->defaults('ex', parent::__e(true));
      Route::get('/our-quality-policy', [self::class, 'showQualityPolicyPage'])->name('quality_policy');
      Route::get('/our-team', [self::class, 'showTeamPage'])->name('our_team');
      Route::get('/our-team-members', [self::class, 'showFullTeamPage'])->name('our_full_team')->defaults('ex', parent::__e(true));
      Route::get('/contact-us', [self::class, 'showContactPage'])->name('contact_us');
      Route::get('/appointment', [self::class, 'showContactPage'])->name('appointment')->defaults('ex', parent::__e(true));
      Route::post('/upload-cv', [self::class, 'handleCVUpload'])->name('upload_cv')->defaults('ex', parent::__e(true));

      Route::get('/message-from-our-md', [self::class, 'showMDMessagePage'])->name('message_from_md')->defaults('ex', parent::__e(true));
      Route::get('/book-an-appointment', [self::class, 'bookAppointment'])->name('book_appointment')->defaults('ex', parent::__e(true));

      Route::get('/services/{service}', [self::class, 'viewServiceItem'])->name('service')->defaults('ex', parent::__e(true));
    });
  }

  public function index(Request $request)
  {
    return Inertia::render('PublicPages,Welcome')->withViewData([
      'title' => 'Welcome to Capitol Hill Hospital/Clinic Warri, Delta State',
      'description' => 'Capitol Hill Clinic/Hospital is a multi-functional hospital, Situated at Ranyo’s Place, Warri, Nigeria. Our Medical Center is an all purpose general specialist practice enclave with non partnership group practice encompassing surgery, obstetrics etc.',
      'keywords' => 'hospital, clinic, laboratory, surgery, capitol hill hospital, warri, delta state, nigeria, specialist, medical',
      'ogImg' => '/img/resources/logo.png'
    ]);
  }

  public function showAboutPage(Request $request)
  {
    return Inertia::render('PublicPages,About')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showMDMessagePage(Request $request)
  {
    return Inertia::render('PublicPages,MDMessage')->withViewData([
      'title' => 'Message from our MD/CEO',
    ]);
  }

  public function showServicesPage(Request $request)
  {
    return Inertia::render('PublicPages,Services')->withViewData([
      'title' => 'Our Services',
      'description' => 'Qualitative health care is all about the services available to your customers. At Capitol Hill we have top of the line services'
    ]);
  }

  public function showFacilitiesPage(Request $request)
  {
    return Inertia::render('PublicPages,Facilities')->withViewData([
      'title' => 'Facilities available at ' . config('app.name'),
    ]);
  }

  public function showCareerPage(Request $request)
  {
    return Inertia::render('PublicPages,Career', [
      'jobListings' => JobListing::latest()->get()
    ])->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showNewsPage(Request $request, $category = null)
  {
    // dd($category);
    if ($category) {
      $blogPosts = BlogPost::where('category_slug', $category)->inRandomOrder()->take(8)->get(['id', 'title', 'slug', 'author', 'created_at', 'img_url', 'thumb_url', 'content'])->each->append(['summary', 'human_date'])->each->makeHidden('content');
    } else {
      $blogPosts = BlogPost::inRandomOrder()->take(8)->get(['id', 'title', 'slug', 'author', 'created_at', 'img_url', 'thumb_url', 'content'])->each->append(['summary', 'human_date'])->each->makeHidden('content');
    }

    return Inertia::render('PublicPages,BlogPosts', [
      'blogPosts' => $blogPosts,
      'categories' => BlogPost::select('category', 'category_slug')->distinct()->get(),
      'latestArticles' => BlogPost::latest()->take(6)->get(['title', 'author', 'created_at', 'slug'])->each->append('human_date'),
    ])->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showNewsPostPage(BlogPost $blogPost)
  {
    return Inertia::render('PublicPages,ViewBlogPost', [
      'blogPost' => $blogPost->append('human_date'),
      'categories' => BlogPost::select('category', 'category_slug')->distinct()->get(),
      'latestArticles' => BlogPost::latest()->take(6)->get(['title', 'author', 'created_at', 'slug'])->each->append('human_date'),
    ])->withViewData([
      'title' => $blogPost->title,
    ]);
  }

  public function showBlogPage(Request $request)
  {
    return Inertia::render('PublicPages,Blog')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showQualityPolicyPage(Request $request)
  {
    return Inertia::render('PublicPages,QualityPolicy')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showContactPage(Request $request)
  {
    return Inertia::render('PublicPages,Contact')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showTeamPage(Request $request)
  {
    return Inertia::render('PublicPages,Team/Team', [
      'teamMembers' => TeamMember::inRandomOrder()->take(4)->get()
    ])->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showFullTeamPage()
  {
    return Inertia::render('PublicPages,Team/AllTeamMembers', [
      'teamMembers' => TeamMember::all()
    ])->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function bookAppointment(Request $request)
  {
    return Inertia::render('PublicPages,Appointment')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function viewServiceItem($service)
  {
    return Inertia::render('PublicPages,Services/' . Str::studly($service))->withViewData([
      'title' => Str::title(str_replace('-', ' ', $service)) . ' | Our Services',
    ]);
  }

  public function handleCVUpload(Request $request)
  {
    // dd($request->all());

    $validator = Validator::make($request->all(), [
      'full_name' => 'required|max:50',
      'phone' => 'required|max:20',
      'position' => 'required|max:30',
      'cv' => 'required|file',
    ]);

    if ($validator->fails()) {
      return back()->withErrors($validator)
        ->withFlash(['error' => 'There are errors in your submission']);
    }

    $url = Storage::url($request->file('cv')->store('public/uploaded_cvs'));

    UploadedDocument::create([
      'full_name' => $request->full_name,
      'phone' => $request->phone,
      'position' => $request->position,
      'cv' => $url
    ]);

    return back()->withFlash(['success' => 'Your CV has been submitted successfully. A member of our HR team will contact you.']);
  }
}
