<?php

namespace Database\Seeders;

use App\Models\RiwayatKesehatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiwayatKesehatan::create([
            'applicant_id' => 1,
            'ada_riwayat_penyakit' => 0,
            'nama_penyakit' =>'',
        ]);
        RiwayatKesehatan::create([
            'applicant_id' => 2,
            'ada_riwayat_penyakit' => 1,
            'nama_penyakit' => 'Sakit Hati, Sakit Maag',
        ]);
        RiwayatKesehatan::create([
            'applicant_id' => 3,
            'ada_riwayat_penyakit' => 1,
            'nama_penyakit' => 'Sakit Panas, TBC(TEKANAN BATIN CINTA',
        ]);
        RiwayatKesehatan::create([
            'applicant_id' => 4,
            'ada_riwayat_penyakit' => 0,
            'nama_penyakit' => '',
        ]);
    }
}
