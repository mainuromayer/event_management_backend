<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role' => 'super_admin',
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'role' => 'event_admin',
            'name' => 'Event Admin',
            'email' => 'event_admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Omayar',
            'email' => 'omayer@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Dalim',
            'email' => 'dalim@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Sofia',
            'email' => 'sofia@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
