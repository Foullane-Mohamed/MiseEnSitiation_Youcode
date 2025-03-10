<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 *
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'category_id' => $this->faker->randomDigit(),
            'updated_at' => $this->faker->date(),
            'created_at' => $this->faker->date(),
        ];

    }
}
