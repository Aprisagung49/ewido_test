<?php

namespace App\Models;

use App\Models\Pelamar;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['pelamar_id','last_education','name_school','jurusan','tahun_kelulusan','nilai_ipk'];
    protected $table = 'educations';
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
