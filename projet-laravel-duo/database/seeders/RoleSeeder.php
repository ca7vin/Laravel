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
            'name' => 'Administrateur',
        ]);
        DB::table('roles')->insert([
            'name' => 'Modérateur',
        ]);
        DB::table('roles')->insert([
            'name' => 'Membre',
        ]);
        DB::table('roles')->insert([
            'name' => 'Web Master',
        ]);
    }
}
