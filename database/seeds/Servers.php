<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Servers extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		DB::table('server')->insert([
			'server_name' => 'EU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('server')->insert([
			'server_name' => 'NAE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('server')->insert([
			'server_name' => 'NAW',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('server')->insert([
			'server_name' => 'OCE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
		]);
		
	}
}
