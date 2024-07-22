<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;  

class Platform extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platform')->insert([
            'platform' => 'PC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('platform')->insert([
            'platform' => 'Console',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
