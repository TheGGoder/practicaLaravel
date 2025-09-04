<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Superhero;
use App\Models\Universe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universe>
 */
class UniverseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'universe' => $this->faker->word(),
            'company' => $this->faker->randomElement(['Marvel', 'DC']),
            'age' => $this->faker->randomElement(['Golden', 'Silver', 'Bronze', 'Modern']),
        ];
    }
}
