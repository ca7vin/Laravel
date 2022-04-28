<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("banners")->insert([
			'petit' => 'Welcome To Our School',
			'grand' => 'Best Place To Learn Graphic Design!',
			'bouton' => 'JOIN US NOW !',
			'image' => '/images/banner-right-image.png',
		]);
    }
}
