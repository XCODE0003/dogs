<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
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
        $status = ['not_available', 'available'];

        $price = rand(0, 500);
        $discount = rand(0, 100);

        $discount = ($discount > 50 ? $discount : NULL);

        return [
            "title" => fake()->unique()->text(30),
            "preview" => "THEO_POM_F01_540x.jpg", // /temple/img/products/photos/

            "price" => $price,

            "status" => $status[array_rand($status, 1)],


            "category_id" => Category::where("id", "!=", 1)->inRandomOrder()->first()->id,
            "created_at" => fake()->unique()->dateTimeBetween(Carbon::now()->startOfYear(), 'now')
        ];
    }
}
