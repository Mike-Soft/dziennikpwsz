<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = User::where('email', "mtmpwsz@gmail.com")->first();
//
//        if(!$user)
//        {
//            User::create({
//
//                'name'=>'admin',
//                'email'=>'mtmpwsz@gmail.com',
//                'role' => 'admin',
//                'password' => Hash::make($data['inf_2019']),
//
//
//            });
//        }

        DB::table('users')->insert([
            'name' => 'Michal',
            'surname' => 'S',
            'email' => 'mtmpwsz@gmail.com',
            'role' => 'admin',
            'class' => '',
            'parentmail' => '',
            'password' => bcrypt('inf_2019'),
            'clas_id' => '0',
        ]);


        DB::table('users')->insert([
            'name' => 'Marek',
            'surname' => 'T',
            'email' => 't@gmail.com',
            'role' => 'teacher',
            'class' => '',
            'parentmail' => '',
            'password' => bcrypt('inf_2019'),
            'clas_id' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'Paweł',
            'surname' => 'T',
            'email' => 'p@gmail.com',
            'role' => 'student',
            'class' => '1a',
            'parentmail' => 'p@parentmail.com',
            'password' => bcrypt('inf_2019'),
            'clas_id' => '1',
        ]);

        for($i=0; $i<4; $i++)
        {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'surname' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'role' => 'student',
                'class' => '1a',
                'parentmail' => Str::random(10) . '@parentmail.com',
                'password' => bcrypt('secret'),
                'clas_id' => '1',
            ]);
        }
        for($i=0; $i<4; $i++)
        {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'surname' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'role' => 'student',
                'class' => '1b',
                'parentmail' => Str::random(10) . '@parentmail.com',
                'password' => bcrypt('secret'),
                'clas_id' => '2',
            ]);

            {
                DB::table('users')->insert([
                    'name' => Str::random(10),
                    'surname' => Str::random(10),
                    'email' => Str::random(10) . '@gmail.com',
                    'role' => 'student',
                    'class' => '2a',
                    'parentmail' => Str::random(10) . '@parentmail.com',
                    'password' => bcrypt('secret'),
                    'clas_id' => '3',
                ]);

                {
                    DB::table('users')->insert([
                        'name' => Str::random(10),
                        'surname' => Str::random(10),
                        'email' => Str::random(10) . '@gmail.com',
                        'role' => 'student',
                        'class' => '2b',
                        'parentmail' => Str::random(10) . '@parentmail.com',
                        'password' => bcrypt('secret'),
                        'clas_id' => '4',
                    ]);

                    {
                        DB::table('users')->insert([
                            'name' => Str::random(10),
                            'surname' => Str::random(10),
                            'email' => Str::random(10) . '@gmail.com',
                            'role' => 'student',
                            'class' => '3a',
                            'parentmail' => Str::random(10) . '@parentmail.com',
                            'password' => bcrypt('secret'),
                            'clas_id' => '5',
                        ]);

                        {
                            DB::table('users')->insert([
                                'name' => Str::random(10),
                                'surname' => Str::random(10),
                                'email' => Str::random(10) . '@gmail.com',
                                'role' => 'student',
                                'class' => '3b',
                                'parentmail' => Str::random(10) . '@parentmail.com',
                                'password' => bcrypt('secret'),
                                'clas_id' => '6',
                            ]);
                        }
                    }
                }
            }
        }
    }
}
