<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create([
            'code' => '#FF0000',
            'name' => 'Red'
        ]);
        Color::create([
            'code' => '#00FF00',
            'name' => 'Green'
        ]);
        Color::create([
            'code' => '#0000FF',
            'name' => 'Blue'
        ]);
        Color::create([
            'code' => '#000000',
            'name' => 'Black'
        ]);
        Color::create([
            'code' => '#FFFFFF',
            'name' => 'White'
        ]);
        Color::create([
            'code' => '#808080',
            'name' => 'Gray'
        ]);
    }
}
