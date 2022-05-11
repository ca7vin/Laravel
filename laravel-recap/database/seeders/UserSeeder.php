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
            'role_id' => 1,
            'name' => 'Calvin Van der Ghinst',
            'email' => 'ca7vin@gmail.com',
            'password' => Hash::make('mostwanted'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Rob Lepigeon',
            'email' => 'lepigeon@gmail.com',
            'password' => Hash::make('lepigeon'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Roi Heenok',
            'email' => 'cheville@gmail.com',
            'password' => Hash::make('cheville'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
