<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'nom' => 'Equipe 1',
            'ville' => 'Bruxelles',
            'pays' => 'Belgique',
            'effectif' => 0,
            'avants' => 0,
            'milieux' => 0,
            'arrieres' => 0,
            'remplacants' => 0,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 2',
            'ville' => 'Berlin',
            'pays' => 'Allemagne',
            'effectif' => 0,
            'avants' => 0,
            'milieux' => 0,
            'arrieres' => 0,
            'remplacants' => 0,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 3',
            'ville' => 'Paris',
            'pays' => 'France',
            'effectif' => 0,
            'avants' => 0,
            'milieux' => 0,
            'arrieres' => 0,
            'remplacants' => 0,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 4',
            'ville' => 'New-York',
            'pays' => 'U.S.A',
            'effectif' => 0,
            'avants' => 0,
            'milieux' => 0,
            'arrieres' => 0,
            'remplacants' => 0,
        ]);
        //
    }
}
