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
            'icon' => 'service-icon-01.png',
            'iconhover' => 'service-icon-hover-01.png',
            'class' => 'first-service',
            'name' => 'App Maintenance',
            'text' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'link' => 'Read More',
        ]);
        DB::table('services')->insert([
            'icon' => 'service-icon-02.png',
            'iconhover' => 'service-icon-hover-02.png',
            'class' => 'second-service',
            'name' => 'Rocket Speed of App',
            'text' => 'You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.',
            'link' => 'Read More',
        ]);
        DB::table('services')->insert([
            'icon' => 'service-icon-03.png',
            'iconhover' => 'service-icon-hover-03.png',
            'class' => 'third-service',
            'name' => 'Multi Workflow Idea',
            'text' => 'If this template is beneficial for your work, please support us <a rel="nofollow"
            href="https://paypal.me/templatemo" target="_blank">a little via PayPal</a>. Thank you.',
            'link' => 'Read More',
        ]);
        DB::table('services')->insert([
            'icon' => 'service-icon-04.png',
            'iconhover' => 'service-icon-hover-04.png',
            'class' => 'fourth-service',
            'name' => '24/7 Help &amp; Support',
            'text' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion
            axe.',
            'link' => 'Read More',
        ]);
        //
    }
}
