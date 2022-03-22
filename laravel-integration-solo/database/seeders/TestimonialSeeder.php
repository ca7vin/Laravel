<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "titre" => 'Testimonial',
            "image" => 'images/plan1.png',
            "titre2" => 'Donals',
            "texte" => 'Tof Lorem Ipsum, you need to be There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a pass <br>
            age of Lorem Ipsum, you need to be ',
        ]);
    }
}
