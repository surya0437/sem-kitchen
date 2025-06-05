<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
    public function definition()
{
    $name = $this->faker->unique()->word;
    return [
        'category_id' => \App\Models\Category::factory(),
        'name' => ucfirst($name),
        'description' => $this->faker->paragraph,
        'in_stock' => $this->faker->numberBetween(0, 100),
        'slug' => Str::slug($name) . '-' . $this->faker->unique()->randomNumber(3),
        'sku' => strtoupper('SKU-' . $this->faker->unique()->bothify('##??##')),
        'image' => json_encode([$this->faker->imageUrl()]),
        'feature' => json_encode([$this->faker->sentence, $this->faker->sentence]),
        'is_active' => true,
        'is_new' => $this->faker->boolean,
    ];
}

}
