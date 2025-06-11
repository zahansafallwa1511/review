<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entity;
use App\Models\Reviewer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'short_review' => fake()->sentence(),
            'detail_review' => fake()->paragraph(),
            'review_meta' => json_encode([]),
            'reviewer_id' => Reviewer::factory(),
            'entity_id' => Entity::factory(),
        ];
    }
}
