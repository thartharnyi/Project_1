<?php

namespace Database\Factories;

use App\Models\Categorization;
use App\Models\Singer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'composer'=>fake()->name(),
            'body'=>fake()->paragraph(),
            'year'=>fake()->year(),

            'singer_id'=>Singer::factory(),
            'categorization_id'=>Categorization::factory()
        ];
    }
}
