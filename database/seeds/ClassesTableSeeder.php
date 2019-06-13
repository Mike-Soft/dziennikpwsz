<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'name' => '1a',

        ]);

        DB::table('classes')->insert([
            'name' => '1b',

        ]);

        DB::table('classes')->insert([
            'name' => '2a',

        ]);

        DB::table('classes')->insert([
            'name' => '2b',

        ]);

        DB::table('classes')->insert([
            'name' => '3a',

        ]);

        DB::table('classes')->insert([
            'name' => '3b',

        ]);
    }
}
