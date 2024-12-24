<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Products::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(1000, 100000),
                'quantity' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}