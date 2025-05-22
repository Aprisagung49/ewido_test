<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Exhibition',
            'slug' => 'Exhibition-1'
        ]);
        Category::create([
            'name' => 'Gathering',
            'slug' => 'Gathering-2'
        ]);
        Category::create([
            'name' => 'Training',
            'slug' => 'Training-3'
        ]);
        Category::create([
            'name' => 'Celebration',
            'slug' => 'Celebration-4'
        ]);
        Category::create([
            'name' => 'Vacation',
            'slug' => 'Vacation-5'
        ]);
        Category::create([
            'name' => 'Others',
            'slug' => 'Others-6'
        ]);
    }
}
