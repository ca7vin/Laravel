<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("maps")->insert([
			'name' => 'Marcyl',
			'email' => 'adnan.marcyl@hotmail.fr',
			'message' => 'Message',
			'phone' => '04 89 85 47 94',
			'address' => 'Rue Victor Greyson, 77 1050 Bruxelles',
		]);
		DB::table("maps")->insert([
			'name' => 'Molengeek',
			'email' => 'test@molengeek.com',
			'message' => 'Message',
			'phone' => '02 880 99 50',
			'address' => 'Place de la minoterie, 10 1080 Bruxelles',
		]);
    }
}
