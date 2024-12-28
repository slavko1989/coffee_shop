<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Country;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'product_id' => Product::inRandomOrder()->value('id'), // Assign existing Product ID
            'country_id' => Country::inRandomOrder()->value('id'), // Assign existing Country ID
            'quantity' => $this->faker->numberBetween(1, 10),
            'order_date' => $this->faker->dateTimeBetween('-10 years', 'now'),

        ];
    }
}
