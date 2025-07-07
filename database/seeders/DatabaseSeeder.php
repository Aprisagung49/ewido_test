<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Admin;
use App\Models\Color;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Skill;
use App\Models\Pelamar;
use App\Models\Newsroom;
use App\Models\AlamatKtp;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Departement;
use App\Models\ProductGroup;
use App\Models\AlamatDomisili;
use App\Models\JobInformation;
use Database\Seeders\JobSeeder;
use Illuminate\Database\Seeder;
use App\Models\Newsroomcategory;
use App\Models\RiwayatKesehatan;
use Database\Seeders\UserSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\PelamarSeeder;
use Database\Seeders\AlamatKtpSeeder;
use Database\Seeders\ApplicantSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\CertificateSeeder;
use Database\Seeders\DepartementSeeder;
use Database\Seeders\ProductGroupSeeder;
use Database\Seeders\AlamatDomisiliSeeder;
use Database\Seeders\JobInformationSeeder;
use Database\Seeders\NewsroomcategorySeeder;
use Database\Seeders\RiwayatKesehatanSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([NewsroomcategorySeeder::class, AdminSeeder::class, UserSeeder::class, NewsroomSeeder::class, DepartementSeeder::class, JobSeeder::class,  ProductGroupSeeder::class, CertificateSeeder::class, ColorSeeder::class]);
        // Newsroom::create([
        //     Newsroom::all(),
        //     Newsroomcategory::all(),
        //     Departement::all(),
        //     Admin::all(),
        //     User::all(),
        //     Job::all(),
        //     applicant::all(),
        //     Education::all(),
        //     AlamatKtp::all(),
        //     AlamatDomisili::all(),
        //     Experience::all(),
        //     Skill::all(),
        //     RiwayatKesehatan::all(),
        //     JobInformation::all(),
        //     ProductGroup::all(),
        //     Certificate::all(),
        //     Color::all()
            
            

        // ])->create();
    }
}
