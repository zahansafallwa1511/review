<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entity>
 */
class EntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'rating' => fake()->randomFloat(1, 0, 5),
            'location' => fake()->address(),
            'image' => fake()->imageUrl(),
            'link' => fake()->url(),
            'category_id' => Category::factory(),
        ];
    }
}
