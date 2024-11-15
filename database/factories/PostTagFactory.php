<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => $this->faker->numberBetween(1, 60),  // Random post_id from 1 to 60
            'tag_id' => $this->faker->numberBetween(1, 60),   // Random tag_id from 1 to 60
        ];
    }
}
