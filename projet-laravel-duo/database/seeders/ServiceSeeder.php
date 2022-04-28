<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Useful Tricks',
            'text' => 'EduWell is the professional HTML5 template for your school or university websites.',
            'image' => '/images/service-icon-01.png',
        ]);
        DB::table('services')->insert([
            'title' => 'Creative Ideas',
            'text' => 'You can download and use this EduWell Template for your teaching and learning stuffs.',
            'image' => '/images/service-icon-02.png',
        ]);
        DB::table('services')->insert([
            'title' => 'Ready Target',
            'text' => 'Please tell your friends about the best CSS template website that is TemplateMo.',
            'image' => '/images/service-icon-03.png',
        ]);
        DB::table('services')->insert([
            'title' => 'Technology',
            'text' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
            'image' => '/images/service-icon-04.png',
        ]);
    }
}
