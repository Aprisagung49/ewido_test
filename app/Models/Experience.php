<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $fillable = [
        'applicant_id',
        'nama_perusahaan',
        'jabatan',
        'jenis_pekerjaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'gaji_terakhir'
    ];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}