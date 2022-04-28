<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("titles")->insert([
			'petit' => 'OUR SERVICES',
			'grand' => 'Provided ',
			'grand2' => 'Services',
			'description' => ' ',
		]);
		DB::table("titles")->insert([
			'petit' => 'OUR COURSES',
			'grand' => 'What You Can ',
			'grand2' => 'Learn',
			'description' => 'You just think about TemplateMo whenever you need free CSS templates for your business website',
		]);
		DB::table("titles")->insert([
			'petit' => ' ',
			'grand' => 'Up to 50% OFF For 1+ courses',
			'grand2' => ' ',
			'description' => "Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.",
		]);
		DB::table("titles")->insert([
			'petit' => 'TESTIMONIALS',
			'grand' => 'What They ',
			'grand2' => ' Think',
			'description' => ' ',
		]);
        DB::table("titles")->insert([
			'petit' => 'CONTACT US',
			'grand' => 'Say ',
			'grand2' => 'Hello',
			'description' => "IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.",
		]);
    }
}
