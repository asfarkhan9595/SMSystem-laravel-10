<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Teachers::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'mobile' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
