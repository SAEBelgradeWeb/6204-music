<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'published_at', 'cover_art', 'user_id', 'artist_id'];

    public function songs()
    {
        return $this->hasMany(\App\Song::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function artist()
    {
        return $this->belongsTo(\App\Artist::class);
    }

}
