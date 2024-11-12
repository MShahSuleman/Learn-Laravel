<?php
namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function show($id)
    {
        // Fetch the song by ID or fail with a 404
        $song = Song::findOrFail($id);
        
        // Fetch more songs by the same artist
        $moreSongs = $song->getMoreByArtist();
        
        // Return the view with the song and more songs
        return view('pages.songs', compact('song', 'moreSongs'));
    }
}