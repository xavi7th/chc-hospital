<?php

namespace App\Modules\PublicPages\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class PublicPagesController extends Controller
{
  /**
   * Return the data for the extras defaults
   *
   * @param bool $navSkip
   * @param string $icon
   *
   * @return array
   */
  private static function __e($navSkip = false, $icon = null)
  {
    return compact(['icon', 'navSkip']);
  }

  public function __construct()
  {
    Inertia::setRootView('publicpages::app');
  }

  static function routes()
  {
    // LoginController::routes();
    Route::group(['middleware' => 'web', 'namespace' => '\App\Modules\PublicPages\Http\Controllers'], function () {

      $p = function ($name) {
        return 'app.' . $name;
      };

      Route::get('/', [self::class, 'index'])->name($p('home'))->defaults('ex', self::__e(false));
      Route::get('/about-us', [self::class, 'showAboutPage'])->name('app.about_us');
      Route::get('/our-services', [self::class, 'showServicesPage'])->name('app.services');
      Route::get('/our-facilities', [self::class, 'showFacilitiesPage'])->name('app.facilities');
      Route::get('/work-with-us', [self::class, 'showCareerPage'])->name('app.career');
      Route::get('/news', [self::class, 'showNewsPage'])->name('app.news');
      Route::get('/our-quality-policy', [self::class, 'showQualityPolicyPage'])->name('app.quality_policy');
      Route::get('/our-team', [self::class, 'showTeamPage'])->name('app.our_team');
      Route::get('/contact-us', [self::class, 'showContactPage'])->name('app.contact_us');

      Route::get('/message-from-our-md', [self::class, 'showMDMessagePage'])->name('app.message_from_md')->defaults('ex', self::__e(true));
      Route::get('/book-an-appointment', [self::class, 'bookAppointment'])->name('app.book_appointment')->defaults('ex', self::__e(true));

      Route::get('/services/{service}', [self::class, 'viewServiceItem'])->name('app.service')->defaults('ex', self::__e(true));
    });
  }

  public function index(Request $request)
  {
    return Inertia::render('Welcome')->withViewData([
      'title' => 'Welcome to Capitol Hill Hospital/Clinic Warri, Delta State',
      'description' => 'Capitol Hill Clinic/Hospital is a multi-functional hospital, Situated at Ranyo’s Place, Warri, Nigeria. Our Medical Center is an all purpose general specialist practice enclave with non partnership group practice encompassing surgery, obstetrics etc.',
      'keywords' => 'hospital, clinic, laboratory, surgery, capitol hill hospital, warri, delta state, nigeria, specialist, medical',
      'ogImg' => '/img/resources/logo.png'
    ]);
  }

  public function showAboutPage(Request $request)
  {
    return Inertia::render('About')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showMDMessagePage(Request $request)
  {
    return Inertia::render('MDMessage')->withViewData([
      'title' => 'Message from our MD/CEO',
    ]);
  }

  public function showServicesPage(Request $request)
  {
    return Inertia::render('Services')->withViewData([
      'title' => 'Our Services',
      'description' => 'Qualitative health care is all about the services available to your customers. At Capitol Hill we have top of the line services'
    ]);
  }

  public function showFacilitiesPage(Request $request)
  {
    return Inertia::render('Facilities')->withViewData([
      'title' => 'Facilities available at ' . config('app.name'),
    ]);
  }

  public function showCareerPage(Request $request)
  {
    return Inertia::render('Career')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showBlogPage(Request $request)
  {
    return Inertia::render('Blog')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showQualityPolicyPage(Request $request)
  {
    return Inertia::render('QualityPolicy')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showContactPage(Request $request)
  {
    return Inertia::render('Contact')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function showTeamPage(Request $request)
  {
    return Inertia::render('Team')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function bookAppointment(Request $request)
  {
    return Inertia::render('Appointment')->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }

  public function viewServiceItem($service)
  {
    return Inertia::render('Services/' . Str::studly($service))->withViewData([
      'title' => 'About Capitol Hill Hospital/Clinic Warri',
    ]);
  }
}
