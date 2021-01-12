<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement("TRUNCATE TABLE addresses");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('addresses')->insert([
            'user_id' => 1,
            'detail' => 'Bursa'
        ]);
    }
}
