<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'username' => "admin",
                'role' => "admin",
                'email' => "admin@test.com",
                'password' => Hash::make('admin'),
                'remember_token' => Str::random(60),
            ),
            array(
                'username' => "user",
                'role' => "user",
                'email' => "user@test.com",
                'password' => Hash::make('user'),
                'remember_token' => Str::random(60),
            ),
        );
        DB::table('users')->insert($data);
    }
}
