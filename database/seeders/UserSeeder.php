<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Str;
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
            'admin_id' => 3,
            'name' => 'Gama Anggadipa Pratama',
            'email' => 'gama@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'admin_id' => 1,
            'name' => 'Apris Agung Wiresa',
            'email' => 'apris@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'admin_id' => 4,
            'name' => 'Pa H.Iman',
            'email' => 'iman@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'admin_id' => 2,
            'name' => 'Kanaya',
            'email' => 'kanaya@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
    }
}
