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
            'price'=> $this->faker->randomFloat(2,5,100),
            'description'=>$this->faker->paragraph
        ];
    }
}
