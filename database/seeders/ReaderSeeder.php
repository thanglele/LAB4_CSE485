<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reader;
use Faker\Factory as Faker;

class ReaderSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        for($i = 0; $i < 20; $i++) {
            Reader::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
} 