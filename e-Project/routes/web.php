<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;
use App\Http\Controllers\personController;


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





Route::get('/crud', [personController::class, 'showPerson'])->name('home');

Route::post('/save', [personController::class, 'savePerson'])->name('save');



Route::view('/addUser', 'person.form')->name('add');
// Route::view('/edit/{id}', 'person.editUser')->name('edit');

Route::get('/edit/{id}', [personController::class, 'editPerson'])->name('edit');

Route::get('/update', [personController::class, 'updatePerson'])->name('update');

Route::get('delete/{id}', [personController::class, 'deletePerson'])->name('delete');
