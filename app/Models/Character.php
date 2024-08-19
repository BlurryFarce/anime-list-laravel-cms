<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'image_url',
        'gender',
        'age',
        'anime_id',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
