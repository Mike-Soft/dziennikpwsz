<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Język Polski',


        ]);

        DB::table('subjects')->insert([
            'name' => 'Matematyka',


        ]);

        DB::table('subjects')->insert([
            'name' => 'Język Angielski',


        ]);

        DB::table('subjects')->insert([
            'name' => 'Fizyka',


        ]);

        DB::table('subjects')->insert([
            'name' => 'WF',


        ]);
    }
}
