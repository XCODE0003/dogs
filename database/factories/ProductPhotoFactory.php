<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPhoto>
 */
class ProductPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "path" => "THEO_POM_F01_540x.jpg", // /storage/images/products/images/
            "product_id" => Product::inRandomOrder()->first()->id,
        ];
    }
}
