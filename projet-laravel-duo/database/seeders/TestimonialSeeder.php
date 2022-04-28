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
            'name' => 'Catherine Walk',
            'text' => 'just think about TemplateMo if you need free CSS templates for your website',
            'role' => 'CEO & Founder',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'David Martin',
            'text' => 'think about our website first when you need free HTML templates for your website',
            'role' => 'CTO of Tech Company',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Sophia Whity',
            'text' => 'just think about our website wherever you need free templates for your website',
            'role' => 'CEO and Co-Founder',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Helen Shiny',
            'text' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
            'role' => 'Tech Officer',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'George Soft',
            'text' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
            'role' => 'Gadget Reviewer',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Andrew Hall',
            'text' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
            'role' => 'Marketing Manager',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Maxi Power',
            'text' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
            'role' => 'Fashion Designer',
            'validation' => true,
            'user_id' => 1
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Olivia Too',
            'text' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
            'role' => 'Creative Designer',
            'validation' => true,
            'user_id' => 1
        ]);
    }
}
