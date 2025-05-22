<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File_Upload extends Model
{
    use HasFactory;

    protected $table = 'file_uploads';
    protected $fillable = [
        'pelamar_id',
        'ktp_upload',
        'pas_foto_upload',
        'kk_upload',
        'cv_upload',
        'ijazah_upload',
        'sertifikasi_lainnya_upload',
    ];

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'pelamar_id');
    }
}
