<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'date' => $this->faker->DateTime('now', 'UTC'),
            'commentaire' => $this->faker->realText(130, 2),
            'post' => $this->faker->realText(170, 2),
            'created_at'=> now()
        ];
    }
}
