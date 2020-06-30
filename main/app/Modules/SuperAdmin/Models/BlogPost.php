<?php

namespace App\Modules\SuperAdmin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Modules\SuperAdmin\Models\BlogPost
 *
 * @property int $id
 * @property string $img_url
 * @property string $thumb_url
 * @property string $title
 * @property string $author
 * @property string $category
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereThumbUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @property-read mixed $human_date
 * @property-read mixed $summary
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereSlug($value)
 * @property string $category_slug
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\SuperAdmin\Models\BlogPost whereCategorySlug($value)
 */
class BlogPost extends Model
{
  protected $fillable = [
    'title', 'author', 'category', 'content', 'img_url', 'thumb_url'
  ];

  public function getSummaryAttribute()
  {
    return truncate(strip_tags($this->content), 200);
  }

  public function getHumanDateAttribute()
  {
    return $this->created_at->diffForHumans();
  }

  public static function boot()
  {

    parent::boot();

    static::creating(function ($post) {
      $post->slug = Str::slug($post->title);
      $post->category_slug = Str::slug($post->category);
    });
  }
}
