<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            "titreTop" => "Increase your client for",
            "titreMid" => "Better position of Business",
            "titreBottom" => "It is a long established fact that a reader will be distracted by the readable content of a page",
            "image" => "images/business_img.jpg",
            "texte" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable",
            "lien" => "Read more",
        ]);
    }
}
