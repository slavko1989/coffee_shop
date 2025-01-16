<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use App\Models\SalesPerson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountrySalesPeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'salesperson_id' => SalesPerson::inRandomOrder()->first()->id, // Random salesperson
            'country_id' => Country::inRandomOrder()->first()->id, // Random country
            'role' => $this->faker->randomElement(['Manager', 'Agent']), // Random role
            'assigned_date' => $this->faker->date(), // Random date
            'priority' => $this->faker->numberBetween(1, 10), // Random priority
        ];
    }
}
