<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
    public function showPerson()
    {
        $personData =  DB::table('persons')->get();
        // return $personData;
        return view('person.index', ["data" => $personData]);
    }

    public function savePerson(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:jpg,jpeg,png,webp|max:3000',
        ]);

        $fileName = time() . '.' . $req->file->extension();
        $req->file->move(public_path('uploads'), $fileName);

        $person = DB::table('persons')->insert(
            [
                'name' => $req->name,
                'email' => $req->email,
                'salary' => $req->salary,
                'mobile' => $req->mobile,
                'image' => $fileName,
                'age' => $req->age,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        if ($person) {
            // return 'Data Saved';
            return redirect()->route('home');
        } else {
            return 'Error';
        }
    }

    public function editPerson(Request $req)
    {
        $singlePerson = DB::table('persons')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('person.editUser', ["data" => $singlePerson]);
    }

    public function updatePerson(Request $req)
    {

        $updateUser = DB::table('persons')->where('id', $req->id)->update(
            [
                'name' => $req->name,
                'email' => $req->email,
                'salary' => $req->salary,
                'mobile' => $req->mobile,
                'age' => $req->age
            ]
        );

        if ($updateUser) {
            return redirect()->route('home');
        } else {
            return 'Error';
        }
    }

    public function deletePerson(String $id)
    {
        $delete  = DB::table('persons')->where('id', $id)->delete();
        // return $id;

        if ($delete) {
            return redirect()->route('home');
        } else {
            return 'An Error Occurd';
        }
    }
}
