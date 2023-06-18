<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::create([
            'full_name' => 'Admin',
            'blood_type' => 'A',
            'address' => 'Jl. Admin',
            'city' => 'Admin',
            'country' => 'Negara Admin',
            'birth_date' => '2000-01-01',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'phone_number' => '081234567890',
            'profile_picture' => 'https://ui-avatars.com/api/?name=Admin',
            'description' => 'Hi, I am Admin',
        ]);
    }
}
