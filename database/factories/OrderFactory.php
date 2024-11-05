<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = [
            [
                "product_id" => "3",
                "count" => 1
            ]
        ];

        $basketInfo = [
            "all_sum" => 655.0,
            "sum" => 255.46,
            "discount" => 399.54,
            "col" => 1,
            "sum_product" => 241.46,
            "delivery" => 14,
        ];

        $status = ['wait', 'success', 'cancel', 'assembly', 'path', 'preorder'];
        return [
            'products' => $products,
            'basket_info' => $basketInfo,
            'status' => $status[array_rand($status, 1)],

            'full_name' => fake()->unique()->firstName() ." ". fake()->unique()->lastName(),
            'phone' => preg_replace('/\s|\-|-|\(|\)/','', fake()->unique()->e164PhoneNumber()),
            'sq' => rand(1, 10),
            'intercom' => rand(1, 10),
            'entrance' => rand(1, 10),
            'floor' => rand(1, 10),
            'address' => fake()->unique()->address(),

            'end_at' => fake()->unique()->dateTimeBetween(Carbon::now()->addDays(14), Carbon::now()->addDays(28)),
            'created_at' => fake()->unique()->dateTimeBetween(Carbon::now(), Carbon::now()->addDays(14)),
        ];
    }
}
