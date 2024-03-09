<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=1; $i<=20; $i++){
            User::create([
                'id' => $i,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
            ]);
        }

    }
}
