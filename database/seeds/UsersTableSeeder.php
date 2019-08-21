<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if (DB::table('users')->get()->count() === 0) {
			DB::table('users')->insert([
				'name' => 'Alauddin Ahmed',
				'email' => 'alauddin088@gmail.com',
				'role' => 'admin',
				'password' => Hash::make(123456789),
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			]);
		}
	}
}
