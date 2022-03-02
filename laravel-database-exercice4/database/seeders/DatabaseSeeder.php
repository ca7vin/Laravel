<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Commentaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //     $this->call([
    //         UserSeeder::class,
    //         RoleSeeder::class,
    //         CommentaireSeeder::class,
    //     ]);
    User::factory()->count(10)->create();
    Role::factory()->count(10)->create();
    Commentaire::factory()->count(50)->create();
    }
}
