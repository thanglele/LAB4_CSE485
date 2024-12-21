<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Faker\Factory as Faker;

class BorrowSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $readers = Reader::all()->pluck('id')->toArray();
        $books = Book::all()->pluck('id')->toArray();
        
        for($i = 0; $i < 30; $i++) {
            $borrow_date = $faker->dateTimeBetween('-6 months', 'now');
            $return_date = $faker->dateTimeBetween($borrow_date, '+2 months');
            
            Borrow::create([
                'reader_id' => $faker->randomElement($readers),
                'book_id' => $faker->randomElement($books),
                'borrow_date' => $borrow_date,
                'return_date' => $return_date,
                'status' => $faker->boolean,
            ]);
        }
    }
} 