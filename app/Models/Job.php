<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ['job_name', 'slug', 'departement_id', 'job_type', 'quota', 'job_location', 'status_education', 'age', 'ipk', 'job_status'];
    protected $casts = ['job_status' => 'boolean'];


    public function pelamars_is_read()
{
    return $this->hasMany(Pelamar::class, 'job_id')->where('is_read', 1);
}

    public function pelamars()
{
    return $this->hasMany(Pelamar::class);
}

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['tag_name' => $name]);

        $this->tags()->attach($tag);
    }
   
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'job_tags');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'job_name'
            ]
        ];
    }

    public function applicants()
    {
        return $this->hasMany(Pelamar::class); // Relasi ke applicants
    }



}


