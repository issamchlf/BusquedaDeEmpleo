<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'work_id' => $this->faker->unique()->numberBetween(1, 10000), 
            'company_name' => $this->faker->company, 
            'location' => $this->faker->city, 
            'comment' => $this->faker->sentence(10), 
            'salary' => $this->faker->numberBetween(30000, 150000), 
            'URL' => $this->faker->url,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), 
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
        
    }
}
