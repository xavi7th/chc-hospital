<?php

namespace App\Modules\SuperAdmin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\SuperAdmin\Models\TeamMember
 *
 * @property int $id
 * @property string $name
 * @property string $job_title
 * @property string $phone
 * @property string $email
 * @property string $description
 * @property string $img_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $job_description
 * @property string $thumb_url
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereJobDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\TeamMember whereThumbUrl($value)
 */
class TeamMember extends Model
{
  protected $fillable = [
    'name', 'job_title', 'phone', 'email', 'job_description', 'img_url', 'thumb_url',
  ];
}
