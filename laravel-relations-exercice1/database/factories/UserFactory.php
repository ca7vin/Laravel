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
            "nom" =>$this->faker->lastName(),
            "prenomo" =>$this->faker->firstName(),
            "age" =>$this->faker->numberBetween($min = 7, $max = 77),
            "email" =>$this->faker->email(),
            "mdp" =>$this->faker->password(),
            "naissance" =>$this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            "genre" =>$this->faker->title(),
            "role_id" => $this->faker->numberBetween($min = 1, $max = 4),

        ];
    }
}
