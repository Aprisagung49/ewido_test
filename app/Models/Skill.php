<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = [
        'applicant_id',
        'keahlian',
    ];
    

    protected $casts = [
        'keahlian' => 'array', 
    ];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
