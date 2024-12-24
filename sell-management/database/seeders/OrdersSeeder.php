<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Orders::create([
                'customer_id' => $faker->numberBetween(1, 10), // Giả định có 10 khách hàng
                'order_date' => $faker->date(),
                'status' => $faker->boolean,
            ]);
        }
    }
}