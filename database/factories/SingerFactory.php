<?php

namespace Database\Factories;

use App\Models\Categorization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Singer>
 */
class SingerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(20,60),
            'nation'=>fake()->word(),
            'country'=>fake()->word(),
            'biography'=>fake()->paragraph(),
            'categorization_id'=>Categorization::factory()
        ];
    }
}
