<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'   => Employer::factory(),
            'title'         => fake()->jobTitle(),
            'description'   => fake()->sentence(),
            'requirements'  => fake()->sentence(), // Aggiungi questa riga
            'salary'        => fake()->numberBetween(30000, 150000), // Usa numeri per numberBetween
            'location'      => 'Remote',
            'schedule'      => 'Full Time',
            'url'           => fake()->url(),
            'featured'      => false,
        ];
    }
}
