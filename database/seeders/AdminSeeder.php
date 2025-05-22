<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Admin::create([
            'name' => 'Super Admin'
       ]);
       Admin::create([
            'name' => 'Admin Product'
       ]);
       Admin::create([
            'name' => 'Admin Newsroom'
       ]);
       Admin::create([
            'name' => 'Admin Career'
       ]);
    }
}
