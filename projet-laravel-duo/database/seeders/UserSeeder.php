<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            "name" => "Calvin Van der Ghinst",
            "email" => "ca7vin@gmail.com",
            "password" => Hash::make('mostwanted'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "name" => "Marcyl Adnan",
            "email" => "marcyl_adnan@gmail.com",
            "password" => Hash::make('blabla123'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "name" => "membre",
            "email" => "membre@membre.com",
            "password" => Hash::make('membre123'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "name" => "Web Master",
            "email" => "webmaster@webmaster.com",
            "password" => Hash::make('webmaster123'),
            "role_id" => 4,
        ]);
    }
}
