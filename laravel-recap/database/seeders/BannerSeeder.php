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
        DB::table('banners')->insert([
            'title' => 'Get The Latest App From App Stores',
            'text' => 'Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS
            layout provided by TemplateMo, a great website to download free CSS templates.',
            'btn1' => 'Free quote',
            'icon1' => 'fab fa-apple',
            'link1' => '#contact',
            'btn2' => 'Free quote',
            'icon2' => 'fab fa-google-play',
            'link2' => '#contact',
            'img' => 'slider-dec.png',
        ]);
        //
    }
}
