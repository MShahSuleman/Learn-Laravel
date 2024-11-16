<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;
use App\Http\Controllers\personController;


// Route::get('/', function () {
//     return view('welcome');
// });


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





// Route::get('/crud', [personController::class, 'showPerson'])->name('home');
// Route::post('/save', [personController::class, 'savePerson'])->name('save');
// Route::view('/addUser', 'person.form')->name('add');
// // Route::view('/edit/{id}', 'person.editUser')->name('edit');
// Route::get('/edit/{id}', [personController::class, 'editPerson'])->name('edit');
// // Route::get('/update', [personController::class, 'updatePerson'])->name('update');
// // Route::post('/update', [personController::class, 'savePerson'])->name('update');
// Route::post('/update', [PersonController::class, 'updatePerson'])->name('update');
// Route::get('delete/{id}', [personController::class, 'deletePerson'])->name('delete');


Route::get('/crud', [PersonController::class, 'showPerson'])->name('home');
Route::post('/save', [PersonController::class, 'savePerson'])->name('save');
Route::view('/addUser', 'person.form')->name('add');
Route::get('/edit/{id}', [PersonController::class, 'editPerson'])->name('edit');
Route::post('/update', [PersonController::class, 'updatePerson'])->name('update');
Route::get('/delete/{id}', [PersonController::class, 'deletePerson'])->name('delete');