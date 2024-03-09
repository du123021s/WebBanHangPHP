<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'id' => 101,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Asign the admin role to the user
        $adminRole = Role::where('name', 'admin')->first();
        $user->assignRole($adminRole);
    }
}
