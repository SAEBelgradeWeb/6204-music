<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'album_id', 'artist_id', 'user_id'];
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function album()
    {
        return $this->belongsTo(\App\Album::class);
    }

    public function artist()
    {
        return $this->belongsTo(\App\Artist::class);
    }
}
