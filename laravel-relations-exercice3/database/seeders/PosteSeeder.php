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
            'nom' => 'avant-equipe1',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 1,
        ]);
        DB::table('postes')->insert([
            'nom' => 'central-equipe1',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 1,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arriere-equipe1',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 1,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacant-equipe1',
            'nombre' => 0,
            'limite' => 3,
            'equipe_id' => 1,
        ]);
        DB::table('postes')->insert([
            'nom' => 'avant-equipe2',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'central-equipe2',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arriere-equipe2',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacant-equipe2',
            'nombre' => 0,
            'limite' => 3,
            'equipe_id' => 2,
        ]);
        DB::table('postes')->insert([
            'nom' => 'avant-equipe3',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 3,
        ]);
        DB::table('postes')->insert([
            'nom' => 'central-equipe3',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 3,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arriere-equipe3',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 3,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacant-equipe3',
            'nombre' => 0,
            'limite' => 3,
            'equipe_id' => 3,
        ]);
        DB::table('postes')->insert([
            'nom' => 'avant-equipe4',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 4,
        ]);
        DB::table('postes')->insert([
            'nom' => 'central-equipe4',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 4,
        ]);
        DB::table('postes')->insert([
            'nom' => 'arriere-equipe4',
            'nombre' => 0,
            'limite' => 2,
            'equipe_id' => 4,
        ]);
        DB::table('postes')->insert([
            'nom' => 'remplacant-equipe4',
            'nombre' => 0,
            'limite' => 3,
            'equipe_id' => 4,
        ]);
        //(2 avant, 2 centraux, 2 arriere, 3remplacants)
    }
}
