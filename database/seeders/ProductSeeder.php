<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(1)->create([
            "title" => "Pet Taxi",
            "preview" => "THEO_POM_F01_540x.jpg", // /temple/img/products/photos/

            "price" => 130,

            "status" => 'available',


            "category_id" => 1,
        ]);
        Product::factory(50)->create();
    }
}
