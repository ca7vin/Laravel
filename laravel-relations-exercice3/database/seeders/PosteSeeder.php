<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            'nom' => 'avants',
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'milieux',
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arrieres',
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacants',
            'limite' => 3,
        ]);
        //(2 avant, 2 centraux, 2 arriere, 3remplacants)
    }
}
