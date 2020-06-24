<?php

namespace App\Modules\SuperAdmin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Modules\SuperAdmin\Models\SuperAdmin;

class SuperAdminDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    factory(SuperAdmin::class, 1)->create();

    // $this->call("OthersTableSeeder");
    $this->call(JobListingsTableSeeder::class);
    $this->call(TeamMembersTableSeeder::class);
  }
}
