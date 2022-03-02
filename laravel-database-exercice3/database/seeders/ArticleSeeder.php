<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            'name' => 'Article1',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima perspiciatis quam deleniti dignissimos necessitatibus consequatur amet obcaecati ea esse. Harum minima temporibus, expedita officia repellendus ipsa possimus natus delectus et culpa perspiciatis hic nostrum qui necessitatibus voluptatibus consequuntur corporis adipisci quia iste. Mollitia quasi ipsa eligendi autem, cumque quis neque?',
            'cote' => 4.85,
            'created_at' => now()
        ]);
    }
}
