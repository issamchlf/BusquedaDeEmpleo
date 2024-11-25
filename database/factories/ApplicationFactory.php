<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job title' =>$this->faker->realText($maxNbChars = 200),
            'Category' =>$this->faker->realText($maxNbChars = 200),
            'status' =>$this->faker->realText($maxNbChars = 200)
        ];
    }
}