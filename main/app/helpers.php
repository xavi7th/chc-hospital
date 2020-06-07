<?php

use Illuminate\Support\Str;
use League\Flysystem\FileNotFoundException as FileDownloadException;
use Illuminate\Contracts\Filesystem\FileNotFoundException as FileGetException;

if (!function_exists('get_related_routes')) {
  /**
   * Another implementation that can generate an array of all routes unnder the given namespace that correspond to the provided methods for drop down menus
   *
   * @param  string $namespace
   * @param  array $methods
   * @param  bool $isHeirarchical Determines whether to return an array that can be used for drop down mwnus
   * @return array
   *
   * Route::get('/', 'AppUserController@loadUserApp')->name('appuser.dashboard')->defaults('extras', ['nav_skip' => false, 'icon' => 'fa fas']);
   */
  function get_related_routes(string $namespace, array $methods, bool $isHeirarchical = false)
  {
    function getHeirachicalRoutes(&$routes)
    {
      $tmp = $routes;
      $routes = [];
      collect($tmp)->map(function ($route, $key) use (&$routes) {
        return $routes[Str::of($key)->after('.')->before('.')->title()->__toString()][] = $route;
      });
      return $routes;
    }

    $routes = collect(\Illuminate\Support\Facades\Route::getRoutes()->getRoutesByName())->filter(function ($value, $key) use ($methods, $namespace) {
      return \Str::startsWith($key, $namespace) && \Str::of(implode('|', $value->methods()))->contains($methods);
    })->map(function (\Illuminate\Routing\Route $route) use ($namespace) {
      return (object)[
        // 'uri' => $route->uri(),
        'name' => $route->getName(),
        'nav_skip' => $route->defaults['ex']['navSkip'] ?? false,
        'icon' => $route->defaults['ex']['icon'] ?? null,
        'menu_name' => \Str::of($route->getName())->afterLast('.')->replaceMatches('/[^A-Za-z0-9]++/', ' ')->after($namespace)->title()->trim()->__toString()
      ];
    })->reject(function ($val) {
      return $val->nav_skip;
    })
      // ->transform(function ($v) {
      //   return collect($v)->forget('nav_skip');
      // })
      ->toArray();

    return $isHeirarchical ? getHeirachicalRoutes($routes) : $routes;
  }
}
