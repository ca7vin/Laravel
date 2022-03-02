<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\User;

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
            'nom' =>$this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' =>$this->faker->numberBetween(25, 67),
            'email' =>$this->faker->safeEmail(),
            'mdp' =>$this->faker->password(),
            'adresse' =>$this->faker->address(),
            'telephone' =>$this->faker->phoneNumber(),
            'commune' =>$this->faker->state(),
            'created_at'=> now()
        ];
    }
}
