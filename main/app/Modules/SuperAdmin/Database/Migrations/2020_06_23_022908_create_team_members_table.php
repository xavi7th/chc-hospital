<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('team_members', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('job_title');
      $table->string('phone');
      $table->string('email');
      $table->longText('job_description');
      $table->string('img_url');
      $table->string('thumb_url');

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
    Schema::dropIfExists('team_members');
  }
}
