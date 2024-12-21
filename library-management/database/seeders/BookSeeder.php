<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => $faker->name,
               'author' => $faker->name,
               'category' => $faker->name,
               'year' => $faker->year,
               'quantity' => $faker->numberBetween(1, 20),
           ]);
       }
   }
}