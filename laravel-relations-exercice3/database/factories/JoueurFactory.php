<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        static $role = 1; //Commencer par le role numero 1 = nbavant
        static $b = 1; //permet de faire le compte de combien d'élements de chaque rôle on a 
        static $equipe = 1; //equipe 1 pour dire qu'on commence la création des joueurs par là, 
        static $i = 1; //permet de faire le compte de combien d'élements de chaque rôle on a
        // jusqu'à ce que tous les postes soient occupés

        if ($b > 2) { //ex: si on a deux avants
            $role++;  //on change de rôle : ex : on passe au rôle suivant : arrière
            if ($role === 4) {  // si on arrive à remplaçant ($role 4 = remplacant et donc valeur max = 3)
                $b = 1;         // en passant à $b, on peut ajouter un tour enplus (et donc avoir 3 joueur au lieu de 2 pour la catégorie)
            } else {            
                $b = 2;         
            }
        } else { //si on a pas encore 2 (ou 3 pour remplacant) joueur de la même catégorie on en rajoute
            $b++;
        }
        if ($role > 4) {   //si on a rempli tous les rôles d'une équipe
            $role = 1;      // on recommence avec le premier rôle 
            $b = 2;        // MYSTERE
            $equipe ++;   // on passe à l'équipe suivante
        }
        
        return [
            "nom" => $this->faker->name,
            "prenom" => $this->faker->firstName,
            "age" => $this->faker->numberBetween(18, 40),
            "telephone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
            "genre" => $this->faker->randomElement(["M", "F", "X"]),
            "pays" => $this->faker->country,
            "photo_id" => $i,
            "poste_id" => $role,
            "equipe_id" => $equipe,
        ];
        $i++;
    }
}