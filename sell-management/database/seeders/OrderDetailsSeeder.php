<?php

namespace Database\Seeders;

use App\Models\Order_details;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Order_details::create([
                'order_id' => $faker->numberBetween(1, 10), // Giả định có 10 đơn hàng
                'product_id' => $faker->numberBetween(1, 10), // Giả định có 10 sản phẩm
                'quantity' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}