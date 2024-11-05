<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            "preview" => "1.jpg", // /temple/reviews/
            "description" => fake()->unique()->text(30),
            "categorie_id" => Category::inRandomOrder()->first()->id
        ];
    }
}
