<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobListing;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = JobListing::class;

    public function definition(): array
    {
         // Define the base date as now
         $now = Carbon::now();
        return [
            'employer_id' => random_int(1, 128),
            'title' => $this->faker->jobTitle,
            // 'salary' => $this->faker->numberBetween(30000, 10000),
             'salary' => '$' . number_format($this->faker->numberBetween(30000, 100000)), // Generates a string salary like "$40,000"
            'created_at' => $now->subDays(random_int(0, 30)), 
            'updated_at' =>  $now->subDays(random_int(0, 30)), 
        ];
    }
}




// Delete records with IDs from 1 to 24
JobListing::destroy(range(1, 10));

