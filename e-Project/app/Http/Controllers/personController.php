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
        return view('person.index', ["data" => $personData]);
    }

    public function savePerson(Request $req)
    {
        // $req->validate([
        //     'title' => 'required|max:255',
        //     'artist' => 'required|max:255',
        //     'duration' => 'required|max:255',
        //     'year' => 'required|numeric|digits:4',
        //     'image_path' => 'required|url',
        //     'video_path' => 'required|url',
        // ]);

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
            return redirect()->route('home');
        } else {
            return 'Error';
        }
    }

    public function editPerson(Request $req)
    {
        $singlePerson = DB::table('songs')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('person.editUser', ["data" => $singlePerson]);
    }

    public function updatePerson(Request $req)
    {
        // $req->validate([
        //     'title' => 'required|max:255',
        //     'artist' => 'required|max:255',
        //     'duration' => 'required|max:255',
        //     'year' => 'required|integer|digits:4',
        //     'image_path' => 'required|url',
        //     'video_path' => 'required|url',
        // ]);
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
            return redirect()->route('home')->with('success', 'Song updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Error updating song.');
        }
    }

    public function deletePerson(String $id)
    {
        $delete  = DB::table('songs')->where('id', $id)->delete();
        // return $id;

        if ($delete) {
            return redirect()->route('home');
        } else {
            return 'An Error Occurd';
        }
    }
}
