<?php

namespace App\Modules\AppUser\Models;

use App\User;

/**
 * App\Modules\AppUser\Models\AppUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\AppUser\Models\AppUser whereUpdatedAt($value)
 */
class AppUser extends User
{
	protected $fillable = [];
	const DASHBOARD_ROUTE_PREFIX = 'user';
}
