<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', "mtmpwsz@gmail.com")->first();

        if(!$user)
        {
            User::create({

                'name'=>'admin',
                'email'=>'mtmpwsz@gmail.com',
                'role' => 'admin',
                'password' => Hash::make($data['inf_2019']),


            });
        }

    }
}
