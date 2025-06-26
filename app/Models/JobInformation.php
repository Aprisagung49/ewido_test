<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobInformation extends Model
{

    use HasFactory;

    protected $table = 'job_information';
    protected $casts = [
        'referensi_kerja' => 'array',
    ];
    protected $fillable = ['referensi_kerja', 'preferred_position', 'kenalan', 'siap_ditempatkan'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class, 'applicant_id');
    }
}
