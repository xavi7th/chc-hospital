<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HandleInertiaRequests extends Middleware
{
  /**
   * The root template that's loaded on the first page visit.
   *
   * @see https://inertiajs.com/server-side-setup#root-template
   * @var string
   */
  protected $rootView = 'publicpages::app';

  /**
   * Determines the current asset version.
   *
   * @see https://inertiajs.com/asset-versioning
   * @param  \Illuminate\Http\Request  $request
   * @return string|null
   */
  public function version(Request $request)
  {
    if (file_exists($manifest = public_path('mix-manifest.json'))) {
      return md5_file($manifest);
    }

    return parent::version($request);
  }

  /**
   * Defines the props that are shared by default.
   *
   * @see https://inertiajs.com/shared-data
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function share(Request $request)
  {
    return array_merge(parent::share($request), [
      'app' => fn () => [
        'name' => config('app.name'),
        'whatsapp' => config('app.whatsapp'),
        'phone' => config('app.phone'),
        'email' => config('app.email'),
        'email2' => config('app.email2'),
        'email3' => config('app.email3'),
        'email4' => config('app.email4'),
        'phone1' => config('app.phone1'),
        'phone2' => config('app.phone2'),
        'phone3' => config('app.phone3'),
        'phone4' => config('app.phone4'),
        'phone5' => config('app.phone5'),
        'address1' => config('app.address1'),
        'address2' => config('app.address2'),
        'num_of_beds' => config('app.num_of_beds'),
        'num_of_doctors' => config('app.num_of_doctors'),
      ],
      'routes' => function (Request $request) {
        return request()->route() ? (Str::of(request()->route()->getName())->contains('superadmin') ? optional($request->user())->get_navigation_routes() ?? (object)[] : get_related_routes('app.', ['GET'], true)) : (object)[];
      },
      'isInertiaRequest' => (bool)request()->header('X-Inertia'),
      'auth' => function (Request $request) {
        return [
          'user' => Auth::user() ?? (object)[],
          'notification_count' => Auth::user() ? $request->user()->unreadNotifications()->count() : null
        ];
      },
      'flash' => fn () => Session::get('flash') ?? (object)[],
    ]);
  }

  /**
   * Sets the root template that's loaded on the first page visit.
   *
   * @see https://inertiajs.com/server-side-setup#root-template
   * @param Request $request
   * @return string
   */
  public function rootView(Request $request): string
  {
    if ($request->user()) {
      return strtolower($request->user()->getType()) . '::app';
    } elseif (Str::contains(\Route::currentRouteName(), 'login')) {
      return 'superadmin::app';
    } else {
      return $this->rootView;
    }
  }
}
