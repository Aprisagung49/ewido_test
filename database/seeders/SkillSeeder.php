<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'applicant_id' => 1,
            'keahlian' => ['php','mysql','css']
        ]);
        Skill::create([
            'applicant_id' => 2,
            'keahlian' => ['photoshop','figma','html2']
        ]);
    }
}
