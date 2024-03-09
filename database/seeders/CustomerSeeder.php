<?php

namespace Database\Seeders;

use App\Models\CustomerModel;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $userId = User::pluck('id')->toArray();

        for($i=1; $i<=20; $i++){
            $customer = new CustomerModel();
            $customer->first_name = $faker->firstName;
            $customer->last_name = $faker->lastName;
            $customer->email = $faker->unique()->safeEmail;
            $customer->phone = $faker->phoneNumber;
            $customer->address = $faker->address;
            $customer->avatar = $faker->imageUrl(200,200, 'people');
            $customer->user_id = $faker->randomElement($userId);
            $customer->save();
        }
    }
}
