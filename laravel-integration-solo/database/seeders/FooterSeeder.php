<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            "titre" => '<strong class="multi"> Free Multipurpose Responsive</strong><br>
            Landing Page 2019',
            "icone1" => '<i class="fa fa-facebook" aria-hidden="true"></i>',
            "icone2" => '<i class="fa fa-twitter" aria-hidden="true"></i>',
            "icone3" => '<i class="fa fa-linkedin" aria-hidden="true"></i>',
            "copyright" => 'Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a>',
        ]);
    }
}
