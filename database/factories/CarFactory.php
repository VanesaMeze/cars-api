<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->company,
            'model' => $this->faker->randomElement(['Sedan', 'SUV', 'Hatchback']),
            'year' => $this->faker->numberBetween(2000, 2023),
            'max_speed' => $this->faker->numberBetween(100, 300),
            'is_automatic' => $this->faker->boolean,
            'engine' => $this->faker->randomElement(['Gasoline', 'Diesel', 'Electric', 'Petrol']),
            'number_of_doors' => $this->faker->randomElement([2, 4])
        ];
    }
}
