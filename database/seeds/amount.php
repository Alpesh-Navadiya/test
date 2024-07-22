<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class amount extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('amounts')->insert([
			'amount' => '2.5',
			'prize' => '4.5',
			'our_fees' => '0.2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('amounts')->insert([
			'amount' => '5',
			'prize' => '9',
			'our_fees' => '0.2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('amounts')->insert([
			'amount' => '10',
			'prize' => '18',
			'our_fees' => '0.2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('amounts')->insert([
			'amount' => '15',
			'prize' => '27',
			'our_fees' => '0.2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}
