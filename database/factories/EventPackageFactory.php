<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => rand(1, 10),
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(1000000, 5000000)
        ];
    }
}
