<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelamar extends Model
{
    use HasFactory;
    protected $table = 'pelamars';

    protected $fillable = ['job_id','nik', 'nama', 'email', 'jenis_kelamin', 'nohp', 'tanggal_lahir', 'status_menikah', 'status', 'tempat_lahir','is_ada_pengalaman','agama'];

    

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
    return $this->hasMany(Experience::class,'pelamar_id');
}
    public function skill()
    {
        return $this->hasOne(Skill::class);
    }

    public function riwayatKesehatan()
{
    return $this->hasOne(RiwayatKesehatan::class, 'pelamar_id');
}


public function job_information()
{
    return $this->hasOne(JobInformation::class, 'pelamar_id');
}

public function file_upload()
{
    return $this->hasOne(File_Upload::class, 'pelamar_id');
}

public function job()
{
    return $this->belongsTo(Job::class);
}

}
