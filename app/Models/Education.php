<?php

namespace App\Models;

use App\Models\Pelamar;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['applicant_id','last_education','name_school','jurusan','tahun_kelulusan','nilai_ipk'];
    protected $table = 'educations';
    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
