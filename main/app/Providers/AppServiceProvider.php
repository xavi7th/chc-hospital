<?php

namespace App\Providers;

use Inertia\Inertia;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    Schema::defaultStringLength(191);
  }



  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //

  }
}
