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
            'pelamar_id' => 1,
            'referensi_kerja' => 'Koran,website',
            'kenalan' => 'Gama',
            'siap_ditempatkan' => 'Tidak'
        ]);
        JobInformation::create([
            'pelamar_id' => 2,
            'referensi_kerja' => 'website, linkedin, facebook',
            'kenalan' => 'Gama',
            'siap_ditempatkan' => 'Ya'
        ]);
        JobInformation::create([
            'pelamar_id' => 3,
            'referensi_kerja' => 'website, linkedin, Kerabat',
            'kenalan' => 'Iman',
            'siap_ditempatkan' => 'Tidak'
        ]);
        JobInformation::create([
            'pelamar_id' => 4,
            'referensi_kerja' => 'website, linkedin, Kerabat',
            'kenalan' => 'Apris',
            'siap_ditempatkan' => 'Ya'
        ]);
    }
}
