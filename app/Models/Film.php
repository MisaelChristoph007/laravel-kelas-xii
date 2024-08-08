<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    protected $fillable = ['title', 'sinopsis', 'year', 'poster', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
