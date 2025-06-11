<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlamatDomisili extends Model
{
    use HasFactory;

    protected $table = 'alamat_domisili';

    protected $fillable = [
        'applicant_id',
        'alamat0',
        'kota0',
        'kecamatan0',
        'kelurahan0',
        'provinsi0',
        'is_domisili_sama',
    ];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
