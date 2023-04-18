<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Flayer '.fake()->word().' '.fake()->year(),
            'size' => fake()->numberBetween(1, 200).'kB',
            'sub_categories_id' => fake()->numberBetween(1,20)
        ];
    }
}
