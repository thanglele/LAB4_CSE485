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

        for ($i = 0; $i < 20; $i++) {
            Reader::create([
                'name' => $faker->name, //ten ngau nhien
                'birthday' => $faker->date(), //ngay sinh ngau nhien
                'phone' => $faker->phoneNumber, //so dien thoai ngau nhien
                'address' => $faker->address,//dia chi ngau nhien
            ]);
        }
    }
}
