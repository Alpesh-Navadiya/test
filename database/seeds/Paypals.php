<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon; 

class Paypals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('paypals')->insert([
			'paypalid' => 'sb-bqtpr1353259@business.example.com',
			'paypalclientid' => 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ',
			'paypalsecratekey' => 'EPVMIsxnyxNkHOxRDLjU4xx4aA0ZhrSBwzNmn4OOOLKuN4Z-O6RaYHx-njrhWLtPB93sfWcNDpZkhZWF',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
