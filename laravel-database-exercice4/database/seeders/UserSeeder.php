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
            'nom' => 'Van der Ghinst',
            'prenom' => 'Calvin',
            'age' => 27,
            'email' => 'ca7vin@gmail.com',
            'mdp' => Hash::make('mostwanted'),
            'adresse' => '28 rue de la fraternité, 1030 Schaerbeek',
            'telephone' => '0479842484',
            'commune' => 'Schaerbeek',
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            'nom' => 'Pampam',
            'prenom' => 'Rodolf',
            'age' => 23,
            'email' => 'r.pampam@gmail.com',
            'mdp' => Hash::make('poumpoum'),
            'adresse' => '3 rue verte, 1030 Schaerbeek',
            'telephone' => '0479211211',
            'commune' => 'Schaerbeek',
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            'nom' => 'Arbout',
            'prenom' => 'Rocco',
            'age' => 19,
            'email' => 'rocco@gmail.com',
            'mdp' => Hash::make('longuetige'),
            'adresse' => '4 impasse des chaudasses, 1000 Bruxelles',
            'telephone' => '0479696969',
            'commune' => 'Bruxelles',
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            'nom' => 'Mok',
            'prenom' => 'Nike',
            'age' => 23,
            'email' => 'outch@gmail.com',
            'mdp' => Hash::make('tamere'),
            'adresse' => '5 rue de flandre, 1020 Bruxelles',
            'telephone' => '0479214433',
            'commune' => 'Laeken',
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            'nom' => 'Akimbo',
            'prenom' => 'Momo',
            'age' => 21,
            'email' => 'mok1080@gmail.com',
            'mdp' => Hash::make('nikmoktout'),
            'adresse' => '100, place de la conciergerie, 1080 Bruxelles',
            'telephone' => '0478868686',
            'commune' => 'Molenbeek',
            "created_at" => now()
        ]);
    }
}
