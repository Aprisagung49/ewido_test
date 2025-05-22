<?php

namespace Database\Seeders;

use App\Models\Pelamar;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Pelamar::create([
            'job_id' => 4,
            'nik' => '32109201920292',
            'nama' => 'test4',
            'jenis_kelamin' => 'Laki-laki',
            'nohp' => '083820385357',
            'email' => 'Aprisagung@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '21/04/1998')->toDateString(),
            'status_menikah' => 'Belum Menikah',
            'status' => 'pending',
            'tempat_lahir' => 'Bandung'
            
        ]);
       Pelamar::create([
            'job_id' => 1,
            'nik' => '321092019839393',
            'nama' => 'test1',
            'jenis_kelamin' => 'Perempuan',
            'nohp' => '083820385371',
            'email' => 'cindviad@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/01/1998')->toDateString(),
            'status_menikah' => 'Menikah',
            'status' => 'pending',
            'tempat_lahir' => 'Bandung'
        ]);
       Pelamar::create([
            'job_id' => 2,
            'nik' => '321092013239393',
            'nama' => 'test2',
            'jenis_kelamin' => 'Perempuan',
            'nohp' => '083820382332',
            'email' => 'apry@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/03/1998')->toDateString(),
            'status_menikah' => 'Belum Menikah',
            'status' => 'pending',
            'tempat_lahir' => 'Bogor'
        ]);
       Pelamar::create([
            'job_id' => 3,
            'nik' => '321092019783737373',
            'nama' => 'test3',
            'jenis_kelamin' => 'Laki-laki',
            'nohp' => '083820323222',
            'email' => 'agungboncel@gmail.com',
            'tanggal_lahir' => Carbon::createFromFormat('d/m/Y', '14/01/1998')->toDateString(),
            'status_menikah' => 'Menikah',
            'status' => 'Accepted',
            'tempat_lahir' => 'Garut'
        ]);
    }
}
