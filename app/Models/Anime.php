<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'episodes',
        'image_url',
        'status',
        'genre',
        'release_date',
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
