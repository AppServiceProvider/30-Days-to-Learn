<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,       // Generates a sentence for the title
            'content' => $this->faker->paragraph,    // Generates a paragraph for the content
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}