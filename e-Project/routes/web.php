<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/open-letter', function () {
    return view('pages.open-letter');
});

Route::get('/login',function(){
    return view('pages.login');
});
Route::get('/about', function () {
    return view('pages.aboutus');
});

// routes/web.php
Route::get('/song/{id}', [SongController::class, 'show'])->name('song.show');

Route::get('/', function () {
    $songs = Song::all(); // Fetch all songs from database
    return view('welcome', compact('songs'));
});