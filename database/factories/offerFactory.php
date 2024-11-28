<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\offer>
 */
class offerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company,
            'location' => $this->faker->city,
            'comment' => $this->faker->sentence(10), 
            'salary' => $this->faker->numberBetween(30000, 120000),
        ];
    }
}
