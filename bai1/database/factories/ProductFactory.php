<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cate_id' => Category::all()->random()->id,
            'price' => rand(1000, 10000),
            'detail' => $this->faker->realText(200, 2),
            'image' => '',
            'quantity' => rand(1, 100)
        ];
    }
}
