<?php

namespace App\Modules\PublicPages\Providers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use App\Modules\PublicPages\Providers\RouteServiceProvider;

class PublicPagesServiceProvider extends ServiceProvider
{
  /**
   * @var string $moduleName
   */
  protected $moduleName = 'PublicPages';

  /**
   * @var string $moduleNameLower
   */
  protected $moduleNameLower = 'publicpages';

  /**
   * Boot the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerTranslations();
    $this->registerConfig();
    $this->registerViews();
    $this->registerFactories();
    $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app->register(RouteServiceProvider::class);
    $this->registerInertia();
  }


  public function registerInertia()
  {
    Inertia::version(function () {
      return md5_file(public_path('mix-manifest.json'));
    });

    Inertia::share([
      'app' => [
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
        'address1' => config('app.address1'),
        'address2' => config('app.address2'),
        'num_of_beds' => config('app.num_of_beds'),
        'num_of_doctors' => config('app.num_of_doctors'),
      ],
      'routes' => function (Request $request) {
        return request()->route() ? Str::of(request()->route()->getName())->contains('superadmin') ? optional($request->user())->get_navigation_routes() ?? (object)[] : get_related_routes('app.', ['GET'], true) : (object)[];
      },
      'isInertiaRequest' => (bool)request()->header('X-Inertia'),
      'flash' => function () {
        return [
          'success' => Session::get('success'),
          'error' => Session::get('error'),
        ];
      },
      'errors' => function () {
        return Session::get('errors')
          ? Session::get('errors')->getBag('default')->getMessages()
          : (object)[];
      },
    ]);
  }

  /**
   * Register config.
   *
   * @return void
   */
  protected function registerConfig()
  {
    $this->publishes([
      module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
    ], 'config');
    $this->mergeConfigFrom(
      module_path($this->moduleName, 'Config/config.php'),
      $this->moduleNameLower
    );
  }

  /**
   * Register views.
   *
   * @return void
   */
  public function registerViews()
  {
    $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

    $sourcePath = module_path($this->moduleName, 'Resources/views');

    $this->publishes([
      $sourcePath => $viewPath
    ], ['views', $this->moduleNameLower . '-module-views']);

    $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
  }

  /**
   * Register translations.
   *
   * @return void
   */
  public function registerTranslations()
  {
    $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

    if (is_dir($langPath)) {
      $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
    } else {
      $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
    }
  }

  /**
   * Register an additional directory of factories.
   *
   * @return void
   */
  public function registerFactories()
  {
    if (!app()->environment('production') && $this->app->runningInConsole()) {
      app(Factory::class)->load(module_path($this->moduleName, 'Database/factories'));
    }
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return [];
  }

  private function getPublishableViewPaths(): array
  {
    $paths = [];
    foreach (\Config::get('view.paths') as $path) {
      if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
        $paths[] = $path . '/modules/' . $this->moduleNameLower;
      }
    }
    return $paths;
  }
}
