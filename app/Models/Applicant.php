<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;
    protected $table = 'applicants';

    protected $fillable = ['job_id','nik', 'nama', 'email', 'jenis_kelamin', 'nohp', 'tanggal_lahir', 'status_menikah', 'status', 'tempat_lahir','is_ada_pengalaman','agama','umur'];

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function alamatKtp()
    {
        return $this->hasOne(AlamatKtp::class);
    }

    public function alamatDomisili()
    {
        return $this->hasOne(AlamatDomisili::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class,'applicant_id');
    }
    public function skill()
    {
        return $this->hasOne(Skill::class);
    }

    public function riwayatKesehatan()
    {
        return $this->hasOne(RiwayatKesehatan::class, 'applicant_id');
    }
    public function job_information()
    {
        return $this->hasOne(JobInformation::class, 'applicant_id');
    }

    public function file_upload()
    {
        return $this->hasOne(File_Upload::class, 'applicant_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }




}
