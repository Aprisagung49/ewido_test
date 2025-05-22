<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = [
        'pelamar_id',
        'keahlian',
    ];
    

    protected $casts = [
        'keahlian' => 'array', 
    ];

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
