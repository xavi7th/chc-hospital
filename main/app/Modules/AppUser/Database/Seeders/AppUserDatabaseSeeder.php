<?php

namespace App\Modules\AppUser\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Modules\AppUser\Models\AppUser;

class AppUserDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		factory(AppUser::class, 1)->create();

		// $this->call("OthersTableSeeder");
	}
}
