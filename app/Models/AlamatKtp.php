<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlamatKtp extends Model
{
    use HasFactory;

    protected $table = 'alamat_ktp';

    protected $fillable = [
        'applicant_id',
        'alamat1',
        'kota1',
        'kecamatan1',
        'kelurahan1',
        'provinsi1'
    ];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
