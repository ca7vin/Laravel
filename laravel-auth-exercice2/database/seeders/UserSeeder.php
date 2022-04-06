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
        DB::table("users")->insert([
            "name" => "Van der Ghinst",
            "first_name" => "Calvin",
            "age" => 27,
            "adress" => "28 rue de la fraternité, 1030 Schaerbeek",
            "email" => "calvin@vanderghinst.be",
            "role_id" => 1,
            "password" => Hash::make('mostwanted12')
        ]);
        DB::table("users")->insert([
            "name" => "Colin",
            "first_name" => "Anne-Catherine",
            "age" => 28,
            "adress" => "6-8, rue longue vie, 1050 Ixelles",
            "email" => "annecatherinecolin@ghotmail.com",
            "role_id" => 3,
            "password" => Hash::make('katozkatoz')
        ]);
        DB::table("users")->insert([
            "name" => "Don Coach",
            "first_name" => "Elias",
            "age" => 35,
            "adress" => "10, place de la minoterie, 1080 Molenbeek-Saint-Jean",
            "email" => "elias@molengeek.com",
            "role_id" => 3,
            "password" => Hash::make('eliaselias')
        ]);
    }
}
