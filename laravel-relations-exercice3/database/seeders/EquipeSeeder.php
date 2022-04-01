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
            'effectif' => 9,
            'avants' => 0,
            'avantsMax' => 2,
            'milieux' => 0,
            'milieuxMax' => 2,
            'arrieres' => 0,
            'arrieresMax' => 2,
            'remplacants' => 0,
            'remplacants' => 0,
            'remplacantsMax' => 3,
            'aucun' => 0,
            'aucunMax' => 1000,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 2',
            'ville' => 'Berlin',
            'pays' => 'Allemagne',
            'effectif' => 9,
            'avants' => 0,
            'avantsMax' => 2,
            'milieux' => 0,
            'milieuxMax' => 2,
            'arrieres' => 0,
            'arrieresMax' => 2,
            'remplacants' => 0,
            'remplacantsMax' => 3,
            'aucun' => 0,
            'aucunMax' => 1000,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 3',
            'ville' => 'Paris',
            'pays' => 'France',
            'effectif' => 9,
            'avants' => 0,
            'avantsMax' => 2,
            'milieux' => 0,
            'milieuxMax' => 2,
            'arrieres' => 0,
            'arrieresMax' => 2,
            'remplacants' => 0,
            'remplacantsMax' => 3,
            'aucun' => 0,
            'aucunMax' => 1000,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Equipe 4',
            'ville' => 'New-York',
            'pays' => 'U.S.A',
            'effectif' => 9,
            'avants' => 0,
            'avantsMax' => 2,
            'milieux' => 0,
            'milieuxMax' => 2,
            'arrieres' => 0,
            'arrieresMax' => 2,
            'remplacants' => 0,
            'remplacantsMax' => 3,
            'aucun' => 0,
            'aucunMax' => 1000,
        ]);
        DB::table('equipes')->insert([
            'nom' => 'Sans equipe',
            'ville' => 'None',
            'pays' => 'None',
            'effectif' => 1000,
            'avants' => 0,
            'avantsMax' => 1000,
            'milieux' => 0,
            'milieuxMax' => 1000,
            'arrieres' => 0,
            'arrieresMax' => 1000,
            'remplacants' => 0,
            'remplacantsMax' => 1000,
            'aucun' => 0,
            'aucunMax' => 1000,
        ]);
        //
    }
}
