<?php

namespace App\Modules\PublicPages\Models;

use Illuminate\Database\Eloquent\Model;

class UploadedDocument extends Model
{
  protected $fillable = [
    'full_name', 'phone', 'position', 'cv',
  ];
}
