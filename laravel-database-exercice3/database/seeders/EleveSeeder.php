<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("eleves")->insert([
            "nom" => "Pampam",
            "prenom" => "Robert",
            "email" => "r.pampam@gmail.com",
            "adresse" => "29 rue des poulpes, 1030 Ghetto, Belgique",
            "date" => "1994-12-05",
            "ip" => "192.168.1.1",
            'created_at' => now()
        ]);
    }
}
