<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = ['wait', 'success', 'cancel', 'assembly', 'path', 'preorder'];
        foreach($status as $s)
        {
            Order::factory(5)->create([
                "user_id" => 1,
                "status" => $s
            ]);
        }
        

        Order::factory(5)->create([
            "user_id" => null
        ]);
    }
}
