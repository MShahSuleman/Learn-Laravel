<?php
namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all(); // Fetch all songs

        return view('user', compact('songs'));
    }
    public function indexPage()
    {
        $songs = Song::all(); // Fetch all songs

        return view('welcome', compact('songs'));
    }
    public function show($id)
    {
        $song = Song::findOrFail($id);
        
        // Fetch more songs by the same artist
        $moreSongs = $song->getMoreByArtist();
        
        // Return the view with the song and more songs
        return view('pages.songs', compact('song', 'moreSongs'));
    }
}