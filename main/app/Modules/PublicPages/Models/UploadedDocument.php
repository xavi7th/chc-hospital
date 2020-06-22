<?php

namespace App\Modules\PublicPages\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\PublicPages\Models\UploadedDocument
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone
 * @property string $position
 * @property string $cv
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\UploadedDocument whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UploadedDocument extends Model
{
  protected $fillable = [
    'full_name', 'phone', 'position', 'cv',
  ];
}
