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
        'job_name' => 'Web Developer',
        'slug' => 'web-developer',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 6,
        'job_location' => 'Plant 1',
        'deskripsi' => '',
        'status_education' => 'SMK',
        'age' => '25',
        'ipk' => '3.00',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Web Desainer',
        'slug' => 'web-desainer',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 2,
        'job_location' => 'Plant 1',
        'deskripsi' => '',
        'status_education' => 'Sarjana S1',
        'age' => '28',
        'ipk' => '3.30',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Content Creator',
        'slug' => 'content-creator',
        'departement_id' => 1,
        'job_type' => 'FullTime',
        'quota' => 1,
        'job_location' => 'Plant 1',
        'deskripsi' => '',
        'status_education' => 'Sarjana S1',
        'age' => '23',
        'ipk' => '3.00',
        'job_status' => 1
       ]);

       Job::create([
        'job_name' => 'Desain Grafis',
        'slug' => 'desain-grafis',
        'departement_id' => 7,
        'job_type' => 'FullTime',
        'quota' => 1,
        'job_location' => 'Plant 2',
        'deskripsi' => '',
        'status_education' => 'SMK',
        'age' => '29',
        'ipk' => '3.00',
        'job_status' => 1
       ]);

    }

}
