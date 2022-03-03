<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' => $this->faker->randomDigit(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            "pays" => $this->faker->country(),
            "created_at" => now()
        ];
    }
}
