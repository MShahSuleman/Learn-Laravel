<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
    public function showPerson()
    {
        $personData =  DB::table('persons')->get();
        return view('person.index', ["data" => $personData]);
    }

    public function showSongs()
    {
        $songsData =  DB::table('songs')->get();
        return view('person.songs', ["data" => $songsData]);
    }

    public function savePerson(Request $req)
    {
        // Your existing code for saving person data
    }

    public function saveSong(Request $req)
    {
        $req->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'duration' => 'required|max:255',
            'year' => 'required|numeric|digits:4',
            'image_path' => 'required|url',
            'video_path' => 'required|url',
        ]);

        $song = DB::table('songs')->insert(
            [
                'title' => $req->title,
                'artist' => $req->artist,
                'duration' => $req->duration,
                'year' => $req->year,
                'image_path' => $req->image_path,
                'video_path' => $req->video_path,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        if ($song) {
            return redirect()->route('songs');
        } else {
            return 'Error';
        }
    }

    public function editPerson(Request $req)
    {
        // Your existing code for editing person data
    }

    public function editSong(Request $req)
    {
        $singleSong = DB::table('songs')->where('id', $req->id)->get();
        return view('person.editSong', ["data" => $singleSong]);
    }

    public function updatePerson(Request $req)
    {
        // Your existing code for updating person data
    }

    public function updateSong(Request $req)
    {
        $updateSong = DB::table('songs')->where('id', $req->id)->update(
            [
                'title' => $req->title,
                'artist' => $req->artist,
                'duration' => $req->duration,
                'year' => $req->year,
                'image_path' => $req->image_path,
                'video_path' => $req->video_path
            ]
        );

        if ($updateSong) {
            return redirect()->route('songs');
        } else {
            return 'Error';
        }
    }

    public function deletePerson(String $id)
    {
        // Your existing code for deleting person data
    }

    public function deleteSong(String $id)
    {
        $delete  = DB::table('songs')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('songs');
        } else {
            return 'An Error Occured';
        }
    }
}