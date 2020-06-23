<?php

namespace App\Modules\SuperAdmin\Models;

use App\User;
use Throwable;
use TypeError;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Modules\SuperAdmin\Models\ErrLog
 *
 * @property int $id
 * @property string|null $message
 * @property string|null $channel
 * @property int $level
 * @property string $level_name
 * @property int $unix_time
 * @property string|null $datetime
 * @property string|null $context
 * @property string|null $extra
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereContext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereLevelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereUnixTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\ErrLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ErrLog extends Model
{
  protected $fillable = [];

  static function notifyAdmin(User $user, Throwable $exception, string $message = null)
  {
    if ($exception instanceof TypeError) {
      Log::error($message, ['userId' => $user->id, 'userType' => get_class($user), 'exception' => $exception->getMessage()]);
    }
    Log::error($message, ['userId' => $user->id, 'userType' => get_class($user), 'exception' => $exception]);
  }

  static function notifyAdminAndFail(User $user, Throwable $exception, string $message = null)
  {
    if (DB::transactionLevel() > 0) {
      Db::rollBack();
    }
    Log::error($message, ['userId' => $user->id, 'userType' => get_class($user), 'exception' => $exception]);
  }

  static function apiRoutes()
  {
    Route::group(['namespace' => '\App\Modules\Admin\Models'], function () {
      Route::get('err-logs', 'ErrLog@getErrorLogs')->middleware('auth:admin_api');
    });
  }

  public function getErrorLogs()
  {
    if (auth('admin_api')->check()) {
      return (new ErrLogTransformer)->collectionTransformer(ErrLog::latest()->get(), 'basicTransform');
    }
  }
}
