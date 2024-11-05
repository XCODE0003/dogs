<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SettingSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductPhotoSeeder::class);
        $this->call(ProductCharacteristicSeeder::class);

        $this->call(ReviewSeeder::class);
// $this->call(OrderSeeder::class);
    }
}
