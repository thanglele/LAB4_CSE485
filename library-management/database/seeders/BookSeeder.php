<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            Book::created([
                'name' => $faker->sentence(3),
                'author' => $faker->name,
                'category' => $faker->randomElement(['Fiction', 'Non-Fiction', 'Science', 'History', 'Biography']),
                'year' => $faker->year($max = 'now'),
                'quantity' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
