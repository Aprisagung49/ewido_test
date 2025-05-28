<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Pelamar;
use App\Models\AlamatKtp;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\AlamatDomisili;
use App\Models\JobInformation;
use Illuminate\Validation\Rule;
use App\Models\RiwayatKesehatan;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index()
    {
        return view('users.careers.apply', [
            
        ]);
    }

    public function create(Job $job)
    {
        return view('users.careers.apply', [
            'job' => $job
        ]);
    }

    public function store(Request $request)
{
    // Validasi
    $request->validate([
        'nik' => 'required|unique:applicants,nik',
        'nama_lengkap' => 'required|max:255',
        'agama' => ['required', Rule::in(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konguchu'])],
        'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
        'nohp' => 'required|max:255',
        'tempat_lahir' => 'required|max:255',
        'tanggal_lahir' => 'required|date_format:Y-m-d',
        'email' => 'required|email|unique:applicants,email',
        'status' => 'pending', 
        // ALAMAT DOMISILI
        'alamat1' => 'required|max:255',
        'kota1' => 'required|max:255',
        'kecamatan1' => 'required|max:255',
        'kelurahan1' => 'required|max:255',
        'provinsi1' => 'required|max:255',
        // ALAMAT KTP
        'alamat0' => 'required|max:255',
        'kota0' => 'required|max:255',
        'kecamatan0' => 'required|max:255',
        'kelurahan0' => 'required|max:255',
        'provinsi0' => 'required|max:255',
        'is_domisili_sama' => 'required',
        // STATUS NIKAH
        'status_menikah' => 'required',
        // PENDIDIKAN
        'last_education' => 'required',
        'name_school' => 'required|max:255',
        'jurusan' => 'required|max:255',
        'tahun_kelulusan' => 'required',
        'nilai_ipk' => 'required',
        // PENGALAMAN KERJA
        'experiences' => 'nullable|string', // JSON string
        'is_ada_riwayat' => 'required|in:ya,tidak',
        'nama_penyakit' => 'nullable|string|max:255',
        'referensi_kerja' => 'nullable|array',
        'kenalan' => 'nullable|string|max:255',
        'siap_ditempatkan' => 'required|in:ya,tidak',
        'referensi_kerja' => 'required|array|min:1',
    
    ]);

    $validatedData = $request->validated();

    // Simpan data ke tabel applicants
    $applicant = Pelamar::create([
        // 'job_id' => $request->job_id,
        'nik' => $validatedData['nik'],
        'nama' => $validatedData['nama_lengkap'],
        'email' => $validatedData['email,'],
        'jenis_kelamin' => $validatedData['jenis_kelamin'],
        'status_menikah' => $validatedData['status_menikah'],
        'nohp' => $validatedData['nohp'],
        'tempat_lahir' => $validatedData['tempat_lahir'],
        'tanggal_lahir' => $validatedData['tanggal_lahir']
        // tambahkan kolom lain sesuai struktur tabel
    ]);

    // Alamat KTP
    AlamatKtp::create([
        'applicant_id' => $applicant->id,
        'alamat' => $validatedData['alamat0'],
        'kota' => $validatedData['kota0'],
        'kecamatan' => $validatedData['kecamatan0'],
        'kelurahan' => $validatedData['kelurahan0'],
        'provinsi' => $validatedData['provinsi0']
    ]);

    // Alamat Domisili
    AlamatDomisili::create([
        'applicant_id' => $applicant->id,
        'alamat' => $validatedData['alamat1'],
        'kota' => $validatedData['kota1'],
        'kecamatan' => $validatedData['kecamatan1'],
        'kelurahan' => $validatedData['kelurahan1'],
        'provinsi' => $validatedData['provinsi1'],
        'is_domisili_sama' => $validatedData['is_domisili_sama']
    ]);

    // Pendidikan
    Education::create([
        'applicant_id' => $applicant->id,
        'pendidikan_terakhir' => $validatedData['last_education'],
        'nama_sekolah' => $validatedData['name_school'],
        'jurusan' => $validatedData['jurusan'],
        'tahun_kelulusan' => $validatedData['tahun_kelulusan'],
        'nilai_ipk' => $validatedData['nilai_ipk'] 
    ]);

    // Pengalaman Kerja (jika ada)
    // Pengalaman Kerja (jika ada)
    if ($request->filled('experiences')) {
        $experiences = json_decode($validatedData['experiences'], true);
        if (is_array($experiences)) {
            foreach ($experiences as $exp) {
                Experience::create([
                    'applicant_id' => $applicant->id,
                    'nama_perusahaan' => $exp['nama_perusahaan'] ?? null,
                    'posisi' => $exp['posisi'] ?? null,
                    'jenis_pekerjaan' => $exp['jenis_pekerjaan'] ?? null,
                    'tanggal_mulai' => $exp['tanggal_mulai'] ?? null,
                    'tanggal_selesai' => $exp['tanggal_selesai'] ?? null,
                    'gaji_terakhir' => $exp['gaji_terakhir'] ?? null,
                    'deskripsi_pekerjaan' => $exp['deskripsi_pekerjaan'] ?? null,
                ]);
            }
        }
    }

    // Riwayat Kesehatan
    $isAdaRiwayat = $validatedData['is_ada_riwayat'] === 'ya';
    RiwayatKesehatan::create([
        'applicant_id' => $applicant->id,
        'is_ada_riwayat' => $isAdaRiwayat,
        'nama_penyakit' => $isAdaRiwayat ? $validatedData['nama_penyakit'] : null,
    ]);

    // Informasi Kerja
    JobInformation::create([
        'applicant_id' => $applicant->id,
        'referensi_kerja' => json_encode($validatedData['referensi_kerja']),
        'kenalan' => $validatedData['kenalan'],
        'siap_ditempatkan' => $validatedData['siap_ditempatkan'] === 'ya',
    ]);

    // if ($request->has('referensi_kerja')) {
    //     // Menggunakan json_encode untuk menyimpan array sebagai string JSON jika perlu
    //     $applicant->referensi_kerja = json_encode($request->referensi_kerja);
    //     $applicant->save();
    // }

    return redirect('users/careers/apply')->with('success', 'Lamaran Sudah Terkirim!');
}
}

