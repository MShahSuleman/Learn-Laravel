<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;
use App\Http\Controllers\personController;
use App\Http\Controllers\usersController;

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
    return view('user', compact('songs'));
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Songs CRUD Routes
Route::get('/crud', [PersonController::class, 'showPerson'])->name('songsHome');
Route::post('/save', [PersonController::class, 'savePerson'])->name('saveSong');
Route::view('/addSong', 'person.songForm')->name('addSong');
Route::get('/edit/{id}', [PersonController::class, 'editPerson'])->name('editSong');
Route::post('/update', [PersonController::class, 'updatePerson'])->name('updateSong');
Route::get('/deleteSong/{id}', [PersonController::class, 'deletePerson'])->name('deleteSong');

// Users CRUD Routes
Route::get('/users', [usersController::class, 'showuser'])->name('home');
Route::post('/saveUser', [usersController::class, 'saveUser'])->name('save');
Route::view('/addUser', 'login.form')->name('add');
Route::get('/editUser/{id}', [usersController::class, 'editUser'])->name('edit');
Route::post('/updateUser', [usersController::class, 'updateUser'])->name('update');
Route::get('/deleteUser/{id}', [usersController::class, 'deleteUser'])->name('delete');
Route::view('/welcome', 'user')->name('welcome');