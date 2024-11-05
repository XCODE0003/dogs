<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCharacteristic>
 */
class ProductCharacteristicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ['BREED', 'SEX', 'NAME'];
        return [
            "text" => fake()->unique()->text(30),
            "title" => $title[array_rand($title, 1)]
        ];
    }
}
