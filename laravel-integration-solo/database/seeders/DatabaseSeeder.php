<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BannerSeeder::class,
            BusinessSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            HeaderSeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
        ]);   
    }
}
