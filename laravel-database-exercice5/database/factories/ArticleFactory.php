<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "datePublication" => $this->faker->DateTime('now', 'UTC'),
            "contenu" =>$this->faker->realText(170, 2),
            "created_at" => now()
        ];
    }
}
