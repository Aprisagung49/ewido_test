<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'pelamar_id' => 1,
            'last_education' => 'S1',
            'name_school' => 'UNIBI',
            'jurusan' => 'Teknik Informatika',
            'tahun_kelulusan' => '2022',
            'nilai_ipk' => '3,70'
        ]);
        Education::create([
            'pelamar_id' => 2,
            'last_education' => 'SMK',
            'name_school' => 'SMK PU NEGERI',
            'jurusan' => 'TKJ',
            'tahun_kelulusan' => '2016',
            'nilai_ipk' => '8.00'
        ]);
        Education::create([
            'pelamar_id' => 3,
            'last_education' => 'S2',
            'name_school' => 'ITB',
            'jurusan' => 'Web Cyber Security',
            'tahun_kelulusan' => '2019',
            'nilai_ipk' => '3,80'
        ]);
        Education::create([
            'pelamar_id' => 4,
            'last_education' => 'S1',
            'name_school' => 'UPI',
            'jurusan' => 'Fotography',
            'tahun_kelulusan' => '2019',
            'nilai_ipk' => '3,20'
        ]);
    }
}
