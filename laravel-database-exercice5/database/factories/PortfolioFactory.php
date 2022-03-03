<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->company(),
            'description' =>$this->faker->realText(130, 2),
            'image' =>$this->faker->imageUrl(640, 480),
            "created_at"=>now()
        ];
    }
}
