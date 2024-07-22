<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Admin extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$str = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890#@';
		$str = str_shuffle($str);
		$token = substr($str, 0, 10);

		DB::table('users')->insert([
			'name' => 'admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('12345678'),
			'remember_token' => $token,
			'slug' => 'admin',
			'whitelistip' => '122.170.101.95',
			'role' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('users')->insert([
			'name' => 'admin1',
			'email' => 'admin1@gmail.com',
			'password' => bcrypt('12345678'),
			'remember_token' => $token,
			'slug' => 'admin',
			'whitelistip' => '182.72.40.250',
			'role' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

	}
}
