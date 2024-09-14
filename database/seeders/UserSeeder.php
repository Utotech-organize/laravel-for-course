<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create a super admin account
        User::create(attributes: [
            'name' => 'Super Admin',
            'email' => 'super.admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make(value: '12345678'), // Secure hashed password
            'remember_token' => Str::random(length: 10),
        ]);
    }
}
