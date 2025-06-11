<?php

namespace Database\Seeders;

use App\Models\AlamatKtp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlamatKtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlamatKtp::create([
            'applicant_id' => 1,
            'alamat1' => 'Jalan Sindangsari 3',
            'kota1' => 'Bandung',
            'kecamatan1' => 'Antapani',
            'kelurahan1' => 'Antapani Wetan',
            'provinsi1' => 'Jawa Barat',
        ]);
        AlamatKtp::create([
            'applicant_id' => 2,
            'alamat1' => 'Jalan Jatihandap',
            'kota1' => 'Bandung',
            'kecamatan1' => 'Mandalajati',
            'kelurahan1' => 'Jatihandap',
            'provinsi1' => 'Jawa Barat',
        ]);
        AlamatKtp::create([
            'applicant_id' => 3,
            'alamat1' => 'Jalan Paas',
            'kota1' => 'Garut',
            'kecamatan1' => 'Pass',
            'kelurahan1' => 'Pameungpeuk',
            'provinsi1' => 'Jawa Barat',
        ]);
        AlamatKtp::create([
            'applicant_id' => 4,
            'alamat1' => 'Jalan Simpang Jeruk',
            'kota1' => 'TasikMalaya',
            'kecamatan1' => 'Tasik',
            'kelurahan1' => 'Kidul',
            'provinsi1' => 'Jawa Barat',
        ]);
    }
}
