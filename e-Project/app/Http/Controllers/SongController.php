<?php
namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function show($id)
    {
        $song = Song::findOrFail($id);
        $moreSongs = $song->getMoreByArtist();
        
        return view('pages.song-detail', compact('song', 'moreSongs'));
    }
}