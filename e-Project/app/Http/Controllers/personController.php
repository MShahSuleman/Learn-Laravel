<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
    public function showPerson()
    {
        $personData =  DB::table('songs')->get();
        // return $personData;
        return view('person.indexSong', ["data" => $personData]);
    }

    public function savePerson(Request $req)
    {
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
            // return 'Data Saved';
            return redirect()->route('songsHome');
        } else {
            return 'Error';
        }
    }

    public function editPerson(Request $req)
    {
        $singlePerson = DB::table('songs')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('person.editSong', ["data" => $singlePerson]);
    }

    public function updatePerson(Request $req)
    {
        $updateSong = DB::table('songs')->where('id', $req->id)->update([
            'title' => $req->title,
            'artist' => $req->artist,
            'duration' => $req->duration,
            'year' => $req->year,
            'image_path' => $req->image_path,
            'video_path' => $req->video_path,
            'updated_at' => now() 
        ]);

        if ($updateSong) {
            return redirect()->route('songsHome')->with('success', 'Song updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Error updating song.');
        }
    }

    public function deletePerson(String $id)
    {
        $deleteSong  = DB::table('songs')->where('id', $id)->delete();
        // return $id;

        if ($deleteSong) {
            return redirect()->route('songsHome');
        } else {
            return 'An Error Occurd';
        }
    }
}
