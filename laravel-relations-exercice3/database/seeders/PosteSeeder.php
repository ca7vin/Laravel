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
            'nom' => 'avant',
            'nombre' => 0,
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'central',
            'nombre' => 0,
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arriere',
            'nombre' => 0,
            'limite' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacant',
            'nombre' => 0,
            'limite' => 3,
        ]);
        //(2 avant, 2 centraux, 2 arriere, 3remplacants)
    }
}
