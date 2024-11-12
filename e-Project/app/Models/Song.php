<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'title',
        'artist',
        'duration',
        'year',
        'image_path',
        'video_path',
        'artist_id'
    ];

    // Get more songs by the same artist
    public function getMoreByArtist()
    {
        return Song::where('id', $this->artist_id)
                  ->where('id', '!=', $this->id)
                  ->take(4)
                  ->get();
    }
}
