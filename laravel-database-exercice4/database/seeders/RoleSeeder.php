<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            "nom" => "Agent",
            "nombre" => 10,
            "created_at" => now()
        ]);
        DB::table('roles')->insert([
            "nom" => "Modérateur",
            "nombre" => 4,
            "created_at" => now()
        ]);
        DB::table('roles')->insert([
            "nom" => "Developpeur",
            "nombre" => 3,
            "created_at" => now()
        ]);
        DB::table('roles')->insert([
            "nom" => "Administrateur",
            "nombre" => 1,
            "created_at" => now()
        ]);
        DB::table('roles')->insert([
            "nom" => "Trésorier",
            "nombre" => 1,
            "created_at" => now()
        ]);
    }
}
