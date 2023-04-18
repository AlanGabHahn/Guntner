<?php

namespace Database\Factories;

use App\Models\Subcategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategorieFactory extends Factory
{
    protected $model = Subcategorie::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Documentos '.fake()->word(),
            'categories_id' => fake()->numberBetween(1, 4)
        ];
    }
}
