<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        for($i = 0; $i < 50; $i++) {
            Book::create([
                'title' => $faker->sentence(4),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'year' => $faker->year,
                'isbn' => $faker->isbn13,
                'quantity' => $faker->numberBetween(1, 20),
            ]);
        }
    }
} 