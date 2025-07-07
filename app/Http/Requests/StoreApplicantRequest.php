<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
//         'job_id' => 'required',
//         'nik' => 'required|digits:16|unique:applicants,nik',
//         'nama_lengkap' => 'required|max:255',
//         'agama' => ['required', Rule::in(['Islam', 'Kristen', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Konguchu'])],
//         'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
//         'nohp' => 'required|max:255',
//         'tempat_lahir' => 'required|max:255',
//         'tanggal_lahir' => 'required|date',
//         'status_menikah' => 'required',
//         'umur' => 'required|numeric',
//         'email' => 'required|email|unique:applicants,email',
//         'keahlian' => 'required|array',
//         'keahlian.*' => 'string|max:100',
//         'ada_riwayat_penyakit' => 'nullable|boolean',
//         'nama_penyakit' => 'nullable|string',

//         'preferred_position' => 'nullable|string',
//         'referensi_kerja' => 'required|array',
//         'referensi_kerja.*' => 'in:Website Ewindo,Instagram,Facebook,Rekan/Sahabat',
//         'kenalan' => 'nullable|string|max:255',
//         'siap_ditempatkan' => 'required|in:Ya,Tidak',

//         // Alamat domisili
//         'alamat_domisili.alamat0' => 'required',
//         'alamat_domisili.kota0' => 'required',
//         'alamat_domisili.kecamatan0' => 'required',
//         'alamat_domisili.kelurahan0' => 'required',
//         'alamat_domisili.provinsi0' => 'required',

//         // Alamat KTP
//         'alamat_ktp.alamat1' => 'required',
//         'alamat_ktp.kota1' => 'required',
//         'alamat_ktp.kecamatan1' => 'required',
//         'alamat_ktp.kelurahan1' => 'required',
//         'alamat_ktp.provinsi1' => 'required',

//         // Pendidikan
//         'education.last_education' => 'required',
//         'education.name_school' => 'required',
//         'education.jurusan' => 'required',
//         'education.tahun_kelulusan' => 'required|numeric|min:1900|max:' . date('Y'),
//         'education.nilai_ipk' => 'required',

//         // File uploads
//         'ktp_upload' => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
//         'pas_foto_upload' => 'nullable|file|max:2048|mimes:jpeg,jpg,png',
//         'kk_upload' => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
//         'cv_upload' => 'nullable|file|max:2048|mimes:pdf,doc,docx',
//         'ijazah_upload' => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
//         'sertifikasi_lainnya_upload' => 'nullable|file|max:2048|mimes:jpeg,jpg,png,pdf',
//     ];
//     }
//     public function messages()
// {
//     return [
//         'nik.required' => 'NIK wajib diisi.',
//         'nik.digits' => 'NIK harus terdiri dari 16 digit.',
//         'nik.unique' => 'NIK ini sudah terdaftar.',
//         'nama_lengkap.required' => 'Nama wajib diisi.',
//         'email.unique' => 'Email ini sudah digunakan.',
//         'email.required' => 'Email wajib diisi.',
//         'keahlian.required' => 'Minimal 1 keahlian harus diisi.',
//         'referensi_kerja.*.in' => 'Referensi kerja harus berasal dari sumber yang valid.',
//         'siap_ditempatkan.in' => 'Jawaban harus Ya atau Tidak.',
        // Tambahkan pesan lainnya jika mau
    ];
}
}
