<?php

namespace App\Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Admin\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		factory(Admin::class, 1)->create();

		// $this->call("OthersTableSeeder");
	}
}
