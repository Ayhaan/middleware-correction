<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Ayhan",
                "email" => "ayhan@test.com",
                "password" => Hash::make('testtest'),
                "role_id" => 1, // admin
            ],
            [
                "name" => "Elias",
                "email" => "elias@test.com",
                "password" => Hash::make('testtest'),
                "role_id" => 2, //membre
            ],
        ]);
    }
}
