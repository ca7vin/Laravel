<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "titreTop" => 'Previous Projects',
            "titreMid" => 'Better position of Business',
            "titreBottom" => 'It is a long established fact that a reader will be distracted by the readable content of a page ',
            "image" => 'images/projects_img.png',
            "texte" => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable',
            "lien" => 'Read more'
        ]);
    }
}
