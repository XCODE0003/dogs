<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductCharacteristic;

class ProductCharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::get();

        foreach($products as $product)
        {
            ProductCharacteristic::factory(3)->create([
                "product_id" => $product->id,
            ]);
        }
    }
}
