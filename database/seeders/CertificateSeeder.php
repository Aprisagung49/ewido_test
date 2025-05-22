<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certificates = [
            ['name' => 'F Certification', 'logo' => 'images/qa-small/f-cert.png'],
            ['name' => 'PSE Certification', 'logo' => 'images/qa-small/pse-cert.png'],
            ['name' => 'RCM Certification', 'logo' => 'images/qa-small/rcm-cert.png'],
            ['name' => 'SNI Certification', 'logo' => 'images/qa-small/sni-cert.png'],
            ['name' => 'UL Certification', 'logo' => 'images/qa-small/ul-cert.png'],
        ];

        foreach ($certificates as $cert) {
            Certificate::create($cert);
        }
    }
}
