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
    $songs = Song::all(); // Fetch all songs for welcome page
    return view('welcome', compact('songs'));
}

public function show($id)
{
    $song = Song::findOrFail($id);
    
    // Optional: Fetch more songs by the same artist
    $moreSongs = Song::where('artist', $song->artist)
                     ->where('id', '!=', $song->id)
                     ->limit(5)
                     ->get();

    return view('pages.songs', compact('song', 'moreSongs'));
}
}