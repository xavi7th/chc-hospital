<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /**
   * Return the data for the extras defaults
   *
   * @param bool $navSkip
   * @param string $icon
   *
   * @return array
   */
  protected static function __e($navSkip = false, $icon = null)
  {
    return compact(['icon', 'navSkip']);
  }
}
