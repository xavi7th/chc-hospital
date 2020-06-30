<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blog_posts', function (Blueprint $table) {
      $table->id();
      $table->string('img_url');
      $table->string('thumb_url');
      $table->string('title');
      $table->string('slug');
      $table->string('author');
      $table->string('category');
      $table->string('category_slug');
      $table->longText('content');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('blog_posts');
  }
}
