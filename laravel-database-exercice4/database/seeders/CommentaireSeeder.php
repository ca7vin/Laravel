<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commentaires")->insert([
            "nom" => "Nom1",
            "prenom" => "Prenom1",
            "date" => now(),
            "commentaire" => "Commentaire1",
            "post" => "Post1",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom2",
            "prenom" => "Prenom2",
            "date" => now(),
            "commentaire" => "Commentaire2",
            "post" => "Post2",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom3",
            "prenom" => "Prenom3",
            "date" => now(),
            "commentaire" => "Commentaire3",
            "post" => "Post3",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom4",
            "prenom" => "Prenom4",
            "date" => now(),
            "commentaire" => "Commentaire4",
            "post" => "Post4",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom5",
            "prenom" => "Prenom5",
            "date" => now(),
            "commentaire" => "Commentaire5",
            "post" => "Post5",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom6",
            "prenom" => "Prenom6",
            "date" => now(),
            "commentaire" => "Commentaire6",
            "post" => "Post6",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom7",
            "prenom" => "Prenom7",
            "date" => now(),
            "commentaire" => "Commentaire7",
            "post" => "Post7",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom8",
            "prenom" => "Prenom8",
            "date" => now(),
            "commentaire" => "Commentaire8",
            "post" => "Post8",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom9",
            "prenom" => "Prenom9",
            "date" => now(),
            "commentaire" => "Commentaire9",
            "post" => "Post9",
            "created_at" => now()
        ]);
        DB::table("commentaires")->insert([
            "nom" => "Nom10",
            "prenom" => "Prenom10",
            "date" => now(),
            "commentaire" => "Commentaire10",
            "post" => "Post10",
            "created_at" => now()
        ]);
    }
}
