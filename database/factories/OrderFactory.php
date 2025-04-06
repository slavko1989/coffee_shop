<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Country;
use App\Models\SalesPerson;

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
        $product = Product::inRandomOrder()->first();
        $quantity = $this->faker->numberBetween(1, 10000);

        return [

            'product_id' => Product::inRandomOrder()->value('id'), // Assign existing Product ID
            'country_id' => Country::inRandomOrder()->value('id'),
            'salesperson_id' => SalesPerson::inRandomOrder()->value('id'), // Assign existing Country ID
            //'quantity' => $this->faker->numberBetween(1, 10),
            'quantity' => $quantity,
            'order_date' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'profit' => ($product->price - $product->cost_price) * $quantity,

/*
   'order_number' => $this->faker->unique()->numerify('ORD-#####'), // Generates unique order numbers like ORD-12345
        'salesperson_id' => Salesperson::inRandomOrder()->value('id'),   // Random salesperson
        'country_id' => Country::inRandomOrder()->value('id'),           // Random country
        'amount' => $this->faker->randomFloat(2, 100, 10000),            // Random amount between 100 and 10,000
        'profit' => $this->faker->randomFloat(2, 10, 5000),              // Random profit between 10 and 5,000
        'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),



        $table->id(); // Primary Key
    $table->foreignId('salesperson_id')->constrained('salespersons')->onDelete('cascade'); // The salesperson handling the order
    $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Country of the customer/order
    $table->string('customer_name'); // Name of the customer
    $table->string('customer_email'); // Email of the customer
    $table->decimal('total_amount', 10, 2); // Total price of the order
    $table->decimal('cost_price', 10, 2); // Cost price for the order
    $table->decimal('profit', 10, 2)->virtualAs('total_amount - cost_price'); // Profit calculated as virtual/generated column
    $table->string('status')->default('pending'); // Status: pending, completed, canceled
    $table->date('order_date'); // Date of the order
    $table->text('notes')->nullable(); // Optional notes for the order
    $table->timestamps(); // Created at, Updated at

        */


        ];
    }
}
