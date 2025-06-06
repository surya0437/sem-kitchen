<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition()
{
    $title = $this->faker->unique()->word;
    return [
        'title' => ucfirst($title),
        'slug' => Str::slug($title),
        'is_active' => $this->faker->boolean(90),
    ];
}

}
