<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Skill;
use App\Models\AlamatKtp;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\AlamatDomisili;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreApplicantRequest;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,$id = null)
    {
        if ($request->is('admin/*')) {
            $query = Applicant::query();
            if ($request->search) {
            $query->where('nama', 'like', '%' . $request->search . '%'); 
        }
            $applicants = $query->where('job_id',$id)->paginate(2)->withQueryString();
            $job = Job::findOrFail($id);

    return view('admin.job.show', compact('job', 'applicants'));        
        } else {
            return view('users.careers.index2', [
                'jobs' => Job::with('tags')->latest()->where('job_status', 1)->paginate(2)->withQueryString()
            ]); 
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        return view('users.careers.form-user',['job' => $job]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_id' => 'required',
            'nik' => 'required|digits:16|unique:applicants,nik',
            'nama_lengkap' => 'required|max:255',
            'agama' => ['required', Rule::in(['Islam', 'Kristen', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Konguchu'])],
            'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'nohp' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'status_menikah' => 'required',
            'umur'=>'required',
            'email' => 'required|email|unique:applicants,email',
            'keahlian' => 'required|array',
            'keahlian.*' => 'string|max:100',
            'ada_riwayat_penyakit' => 'nullable|boolean',
            'nama_penyakit' => 'nullable|string',
            'preferred_position'=>'nullable|string',
            'referensi_kerja' => 'required|array',
            'referensi_kerja.*' => 'in:Website Ewindo,Instagram,Facebook,Rekan/Sahabat',
            'kenalan'=> 'nullable|string|max:255',
            'siap_ditempatkan' =>'required|in:Ya,Tidak',

            // Validasi alamat domisili
        'alamat_domisili.alamat0' => 'required',
        'alamat_domisili.kota0' => 'required',
        'alamat_domisili.kecamatan0' => 'required',
        'alamat_domisili.kelurahan0' => 'required',
        'alamat_domisili.provinsi0' => 'required',

        // Validasi alamat KTP
        'alamat_ktp.alamat1' => 'required',
        'alamat_ktp.kota1' => 'required',
        'alamat_ktp.kecamatan1' => 'required',
        'alamat_ktp.kelurahan1' => 'required',
        'alamat_ktp.provinsi1' => 'required',

        'education.last_education' => 'required',
        'education.name_school' => 'required',
        'education.jurusan' => 'required',
        'education.tahun_kelulusan' => 'required|numeric|min:1900|max:' . date('Y'),
        'education.nilai_ipk' => 'required',

        'ktp_upload'                => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
        'pas_foto_upload'           => 'nullable|file|max:2048|mimes:jpeg,jpg,png',
        'kk_upload'                 => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
        'cv_upload'                 => 'nullable|file|max:2048|mimes:pdf,doc,docx',
        'ijazah_upload'             => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
        'sertifikasi_lainnya_upload'=> 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',

        ]);

   
    
        // Coba hanya simpan ke tabel applicants
        $applicant = Applicant::create([
            'job_id' => $validatedData['job_id'],
            'nik' => $validatedData['nik'],
            'nama' => $validatedData['nama_lengkap'],
            'email' => $validatedData['email'], // diperbaiki dari 'email,' jadi 'email'
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'status_menikah' => $validatedData['status_menikah'],
            'umur' => $validatedData['umur'],
            'nohp' => $validatedData['nohp'],
            'agama' => $request->agama,
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'is_ada_pengalaman' => $request->is_ada_pengalaman,
            // 'status' => 'pending', // jika ada kolom status
        ]);

        

        // Simpan alamat domisili
    $alamatDomisili = new AlamatDomisili([
        'alamat0' => $request->alamat_domisili['alamat0'],
        'kota0' => $request->alamat_domisili['kota0'],
        'kecamatan0' => $request->alamat_domisili['kecamatan0'],
        'kelurahan0' => $request->alamat_domisili['kelurahan0'],
        'provinsi0' => $request->alamat_domisili['provinsi0'],
        'is_domisili_sama' => $request->has('copyAlamat'),
    ]);
    $applicant->alamatDomisili()->save($alamatDomisili);

    // Simpan alamat KTP
    $alamatKtp = new AlamatKtp([
        'alamat1' => $request->alamat_ktp['alamat1'],
        'kota1' => $request->alamat_ktp['kota1'],
        'kecamatan1' => $request->alamat_ktp['kecamatan1'],
        'kelurahan1' => $request->alamat_ktp['kelurahan1'],
        'provinsi1' => $request->alamat_ktp['provinsi1'],
    ]);
    $applicant->alamatKtp()->save($alamatKtp);

    // Simpan data pendidikan
$education = new Education([
    'last_education' => $request->education['last_education'],
    'name_school' => $request->education['name_school'],
    'jurusan' => $request->education['jurusan'],
    'tahun_kelulusan' => $request->education['tahun_kelulusan'],
    'nilai_ipk' => $request->education['nilai_ipk'],
]);

$applicant->education()->save($education);

if ($request->input('is_ada_pengalaman') === 'ya' && $request->filled('experience')) {

    foreach ($request->experience as $index => $exp) {
        // Skip jika nama perusahaan kosong
        if (empty($exp['nama_perusahaan'])) continue;

        try {
            Experience::create([
                'applicant_id'       => $applicant->id,
                'nama_perusahaan'  => $exp['nama_perusahaan'],
                'jabatan'          => $exp['jabatan'],
                'jenis_pekerjaan'  => $exp['jenis_pekerjaan'],
                'tanggal_mulai'    => $exp['tanggal_mulai'] ?? null,
                'tanggal_selesai'  => $exp['tanggal_selesai'] ?? null,
                'gaji_terakhir'    => $exp['gaji_terakhir'],
            ]);
        } catch (\Exception $e) {
            // Bisa juga pakai Log::error() kalau tidak ingin hentikan eksekusi
            dd("Gagal menyimpan data pengalaman index ke-{$index}: " . $e->getMessage());
        }
    }
}

    if ($request->filled('keahlian')) {
        $applicant->skill()->create([
            'keahlian' => $request->keahlian,
        ]);
    }

    $applicant->riwayatKesehatan()->create([
        'ada_riwayat_penyakit' => $request->boolean('ada_riwayat_penyakit'),
        'nama_penyakit' => $request->input('ada_riwayat_penyakit') ? $request->input('nama_penyakit') : null,
    ]);

    $applicant->job_information()->create([
        'referensi_kerja'   => $validatedData['referensi_kerja'],
        'preferred_position'=>$request->preferred_position,
        'kenalan'           => $request->kenalan,
        'siap_ditempatkan'  => $request->siap_ditempatkan,
    ]);

            $filePaths = [];

        if ($request->hasFile('ktp_upload')) {
            $filePaths['ktp_upload'] = $request->file('ktp_upload')->storeAs('file_upload_applicant', 'ktp_' . time() . '.' . $request->ktp_upload->extension(), 'public');
        }

        if ($request->hasFile('pas_foto_upload')) {
            $filePaths['pas_foto_upload'] = $request->file('pas_foto_upload')->storeAs('file_upload_applicant', 'pas_foto_' . time() . '.' . $request->pas_foto_upload->extension(), 'public');
        }

        if ($request->hasFile('kk_upload')) {
            $filePaths['kk_upload'] = $request->file('kk_upload')->storeAs('file_upload_applicant', 'kk_' . time() . '.' . $request->kk_upload->extension(), 'public');
        }

        if ($request->hasFile('cv_upload')) {
            $filePaths['cv_upload'] = $request->file('cv_upload')->storeAs('file_upload_applicant', 'cv_' . time() . '.' . $request->cv_upload->extension(), 'public');
        }

        if ($request->hasFile('ijazah_upload')) {
            $filePaths['ijazah_upload'] = $request->file('ijazah_upload')->storeAs('file_upload_applicant', 'ijazah_' . time() . '.' . $request->ijazah_upload->extension(), 'public');
        }

        if ($request->hasFile('sertifikasi_lainnya_upload')) {
            $filePaths['sertifikasi_lainnya_upload'] = $request->file('sertifikasi_lainnya_upload')->storeAs('file_upload_applicant', 'sertifikasi_lainnya_' . time() . '.' . $request->sertifikasi_lainnya_upload->extension(), 'public');
        }

        // Simpan data berkas di tabel
        $applicant->File_Upload()->create($filePaths);

        return redirect('/careers')->with('success', '<div style="text-align: center; color: black; margin-bottom: 10px;">
        <strong>Terima kasih atas lamaran Anda!</strong>
    </div>
    <div style="text-align: center; color: black; margin-bottom: 10px;">
        Kami menghargai minat Anda untuk bergabung di PT Ewindo.<br>
        Tim perekrutan kami akan meninjau lamaran Anda, dan jika kualifikasi Anda sesuai dengan kebutuhan kami, kami akan menghubungi Anda untuk langkah selanjutnya.
    </div>
    <div style="text-align: center; color: red; margin-top: 15px;">
        <strong>Harap diperhatikan bahwa hanya kandidat yang terpilih yang akan dihubungi.</strong>
    </div>
');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function DetailApplicant($id){
        $applicants = Applicant::with(['alamatKtp', 'alamatDomisili','education','riwayatKesehatan','job_information'])->where('id', $id)->get();
        $experiences = Experience::where('applicant_id', $id)->get();
        $skills = Skill::where('applicant_id', $id)->get();
    return view('admin/job/applicantshow', compact('applicants','experiences','skills'));
    }
}
