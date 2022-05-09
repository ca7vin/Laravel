<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'active' => 'active',
            'name' => 'David Martino Co',
            'date' => '30 novembre 2021' ,
            'category' => 'Financial Apps',
            'rating' => 4.8,
            'img' => 'client-image.jpg',
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit,
            sed do eismod tempor idunte ut labore et dolore magna
            aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit
            massive big blasta.”',
            'job' => 'CEO of David Company',
        ]);
        DB::table('clients')->insert([
            'active' => '',
            'name' => 'Jake Harris Nyo',
            'date' => '29 November 2021' ,
            'category' => 'Digital Business',
            'rating' => 4.5,
            'img' => 'client-image.jpg',
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit,
            sed do eismod tempor idunte ut labore et dolore magna
            aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit
            massive big blasta.”',
            'job' => 'CTO of Digital Company',
        ]);
        DB::table('clients')->insert([
            'active' => '',
            'name' => 'May Catherina',
            'date' => '27 November 2021' ,
            'category' => 'Business & Economics',
            'rating' => 4.7,
            'img' => 'client-image.jpg',
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit,
            sed do eismod tempor idunte ut labore et dolore magna
            aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit
            massive big blasta.”',
            'job' => 'Founder of Catherina Co.',
        ]);
        DB::table('clients')->insert([
            'active' => '',
            'name' => 'Random User',
            'date' => '24 November 2021' ,
            'category' => 'New App Ecosystem',
            'rating' => 3.9,
            'img' => 'client-image.jpg',
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit,
            sed do eismod tempor idunte ut labore et dolore magna
            aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit
            massive big blasta.”',
            'job' => 'Manager, Digital Company',
        ]);
        DB::table('clients')->insert([
            'active' => '',
            'name' => 'Mark Amber Do',
            'date' => '21 November 2021' ,
            'category' => 'Web Development',
            'rating' => 4.3,
            'img' => 'client-image.jpg',
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit,
            sed do eismod tempor idunte ut labore et dolore magna
            aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit
            massive big blasta.”',
            'job' => 'CTO, Amber Do Company',
        ]);
        //
    }
}
