<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $price = $this->faker->randomFloat(2, 50, 1000);
        $flavors = [
            'Black', 'Espresso', 'Cappuccino', 'Latte', 'Mocha',
            'Caramel', 'Vanilla', 'Hazelnut', 'Irish Cream', 'Coconut',
            'Pumpkin Spice', 'Toffee Nut', 'White Chocolate', 'Cinnamon',
            'Chocolate Mint', 'Maple', 'Amaretto', 'Almond', 'Banana',
            'Blueberry', 'Cherry', 'Cranberry', 'Peach', 'Pineapple',
            'Raspberry', 'Strawberry', 'Orange', 'Lemon', 'Honey',
            'Gingerbread'
        ];
        return [
            'name'=>$this->faker->randomElement($flavors),
            'category_id'=>\App\Models\Category::factory(),
            //'price'=> $this->faker->randomFloat(2,5,100),
            'price' => $price,
            'description'=>$this->faker->paragraph,
            'cost_price' => $this->faker->randomElement([
                $price * 0.8,     // 80% of price
                $price * 0.75,    // 75% of price
                $price * 0.85,    // 85% of price
            ]),
        ];
    }
}
