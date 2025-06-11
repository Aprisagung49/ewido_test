<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class RiwayatKesehatan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_kesehatan';
    protected $fillable = ['ada_riwayat_penyakit', 'nama_penyakit'];

    public function applicant()
{
    return $this->belongsTo(applicant::class, 'applicant_id');
}
}
