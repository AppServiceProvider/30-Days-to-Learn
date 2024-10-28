<?php

namespace Database\Factories;
// database/factories/JobFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        return [
            'queue' => $this->faker->word,
            'payload' => $this->faker->text,
            'attempts' => $this->faker->numberBetween(1, 5),
            'reserved_at' => null,
            'available_at' => now()->timestamp,
            'created_at' => now()->timestamp,
        ];
    }
}
