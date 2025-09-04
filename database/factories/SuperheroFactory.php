<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Superhero;
use App\Models\Universe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superhero>
 */
class SuperheroFactory extends Factory
{
    protected $model = Superhero::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->firstName(), 
            'real_name' => $this->faker->name(),           
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'universe_id' => Universe::factory(),          
        ];
    }
}
