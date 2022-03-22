<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            "navText" => "Home",
            "navLink" => "#Home",
            "image" => "images/logo.png"
        ]);
        DB::table('headers')->insert([
            "navText" => "About",
            "navLink" => "#About",
            "image" => ""
        ]);
        DB::table('headers')->insert([
            "navText" => "Contact",
            "navLink" => "#Contact",
            "image" => ""
        ]);
        DB::table('headers')->insert([
            "navText" => "Log in",
            "navLink" => "/back/banners",
            "image" => ""
        ]);
    }
}
