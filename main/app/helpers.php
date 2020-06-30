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




if (!function_exists('strip_tags_content')) {

  /**
   * Strip unwanted tags AND THEIR CONTENTS from a supplied string
   *
   * The original strip_tags function can be unsafe sometimes and you have to list ALL tags you want.
   * Also the original leaves the contents, resulting in garbled messages
   *  With this you can add the tag you DON'T WANT
   *
   * @param string $text The string to strip
   * @param string $tags The tags you want to allow or disallow.
   * @param bool $invert Determines whether you are specifying allowable or unallowed tags
   *
   *
   *
   * @return array
   **/

  function strip_tags_content($text, $tags = '<script>', $invert = TRUE)
  {

    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
    $tags = array_unique($tags[1]);

    if (is_array($tags) and count($tags) > 0) {
      if ($invert == FALSE) {
        return preg_replace('@<(?!(?:' . implode('|', $tags) . ')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
      } else {
        return preg_replace('@<(' . implode('|', $tags) . ')\b.*?>.*?</\1>@si', '', $text);
      }
    } elseif ($invert == FALSE) {
      return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
    }
    return $text;
  }
}

function truncate($string, $length = 100, $append = "&hellip;")
{
  $string = trim($string);

  if (strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}

if (!function_exists('compress_image_upload')) {

  /**
   * Compress uploaded image files for better optimisation
   *
   * Uses the Intervention library to compress files into the specified size at 85% quality
   *  and optionally create thumbnail images and saves them in the paths provided
   * for the image and the thumbnail. The aspect ration can optionally be maintained
   * returns an array of file names.
   *
   * @param string $key The index name of the file field in the request object
   * @param string $save_path The path to save the compressed image
   * @param string $thumb_path The optional path to save the thumbnail. If provided, thumbnails will be generated
   * @param int $size The size to compress the image into. Defaults to 1400px
   * @param bool $constrain_aspect_ration Boolean value indication whether to constrain the aspect ratio on compression
   *
   * @package \Intervention\Image\Facades\Image
   *
   * composer require intervention/image
   *
   * @return array
   **/

  function compress_image_upload(string $key, string $save_path, ?string $thumb_path = null, ?int $size = 1400, ?bool $constrain_aspect_ratio = true)
  {
    if (!File::isDirectory(public_path($save_path))) {
      File::makeDirectory(public_path($save_path), 0755);
    }

    if ($thumb_path && !File::isDirectory(public_path($thumb_path))) {
      File::makeDirectory(public_path($thumb_path), 0755);
    }

    $image = \Intervention\Image\Facades\Image::make(request()->file($key)->getRealPath());

    if ($constrain_aspect_ratio) {
      $image->resize($size, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save(public_path($save_path) . request()->file($key)->hashName(), 85);

      $url = $save_path . request()->file($key)->hashName();

      if ($thumb_path) {
        $image->resize(300, null, function ($constraint) {
          $constraint->aspectRatio();
        })->save(public_path($thumb_path) . request()->file($key)->hashName(), 70);

        $thumb_url = $thumb_path . request()->file($key)->hashName();

        return ['img_url' => $url, 'thumb_url' => $thumb_url];
      }
      return ['img_url' => $url];
    } else {
      $image->resize($size)->save(public_path($save_path) . request()->file($key)->hashName(), 85);
      $url = $save_path . request()->file($key)->hashName();

      if ($thumb_path) {
        $image->resize(300)->save(public_path($thumb_path) . request()->file($key)->hashName(), 70);
        $thumb_url = $thumb_path . request()->file($key)->hashName();

        return ['img_url' => $url, 'thumb_url' => $thumb_url];
      }

      return ['img_url' => $url];
    }
  }
}
