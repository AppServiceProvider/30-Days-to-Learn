<?php

namespace Database\Factories;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employer::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Ensure a name value is generated
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
