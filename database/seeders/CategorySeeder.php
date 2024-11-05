<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(1)->create([
            "title" => "Pet Taxi",
            "preview" => "rolly_750x.jpg", // /temple/img/categories/
            "taxi" => 1
            // 'name' => 'DomainName',
        ]);

        Category::factory(5)->create();
    }
}
