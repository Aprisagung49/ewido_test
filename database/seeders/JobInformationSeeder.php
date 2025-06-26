<?php

namespace Database\Seeders;

use App\Models\JobInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobInformation::create([
            'applicant_id' => 1,
            'referensi_kerja' => 'Koran,website',
            'preferred_position'=>null,
            'kenalan' => 'Gama',
            'siap_ditempatkan' => 'Tidak'
        ]);
        JobInformation::create([
            'applicant_id' => 2,
            'referensi_kerja' => 'website, linkedin, facebook',
            'preferred_position'=>null,
            'kenalan' => 'Gama',
            'siap_ditempatkan' => 'Ya'
        ]);
        JobInformation::create([
            'applicant_id' => 3,
            'referensi_kerja' => 'website, linkedin, Kerabat',
            'preferred_position'=>null,
            'kenalan' => 'Iman',
            'siap_ditempatkan' => 'Tidak'
        ]);
        JobInformation::create([
            'applicant_id' => 4,
            'referensi_kerja' => 'website, linkedin, Kerabat',
            'preferred_position'=>null,
            'kenalan' => 'Apris',
            'siap_ditempatkan' => 'Ya'
        ]);
    }
}
