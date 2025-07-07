<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Job::create([
        'job_name' => 'Talent Pool',
        'slug' => 'talent-pool',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 6,
        'job_location' => 'Plant 1',
        'deskripsi' => 'Talent Pool PT. EWINDO menjaring pelamar terbaik dan potensial yang siap menempati posisi sesuai kebutuhan perusahaan di masa depan. Program ini mengumpulkan data kandidat sebagai persiapan rekrutmen agar proses penerimaan lebih cepat dan tepat.',
        'is_preferred_position' =>1,
        'status_education' => 'SMK',
        'age' => '25',
        'ipk' => '3.00',
        'job_status' => 1
       ]);

    }

}
