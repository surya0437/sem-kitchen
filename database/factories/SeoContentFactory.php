<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeoContent>
 */
class SeoContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'meta_description' => $this->faker->sentence,
        'meta_keywords' => implode(', ', $this->faker->words(5)),
        'meta_author' => $this->faker->name,
        'og_description' => $this->faker->sentence,
    ];
}

}
