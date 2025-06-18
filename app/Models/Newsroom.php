<?php

namespace App\Models;

use App\Models\User;
use App\Models\NewsroomCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Newsroom extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'newsrooms';
    protected $fillable = ['title' , 'user' , 'slug' , 'body', 'user_id', 'category_id', 'image'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsroomCategory::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
public function newsroom_images()
{
    return $this->hasMany(NewsroomImage::class);
}
}
