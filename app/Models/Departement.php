<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    /** @use HasFactory<\Database\Factories\DepartementFactory> */
    use HasFactory;
    protected $fillable = ['departement_name'];


    public function job(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
