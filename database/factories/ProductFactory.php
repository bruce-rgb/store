<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'model' => $this->faker->word(),
            'brand' => $this->faker->word(),
            'color' => $this->faker->colorName(),
            'image' => $this->faker->imageUrl(480, 480, 'technology', true),
        ];
    }
}
