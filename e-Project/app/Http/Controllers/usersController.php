<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function showUser()
    {
        $userData =  DB::table('users')->get();
        // return $personData;
        return view('login.index', ["data" => $userData]);
    }

    public function saveUser(Request $req)
{
    // Validate the incoming request
    $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        're_enter_password' => 'required|same:password'
    ]);

    // Check if user already exists
    $existingUser = DB::table('users')->where('email', $req->email)->first();
    if ($existingUser) {
        return redirect()->back()->withInput()->with('error', 'User already exists');
    }

    // Insert new user
    DB::table('users')->insert([
        'name' => $req->name,
        'email' => $req->email,
        'password' => bcrypt($req->password), // Use bcrypt for password hashing
        're_enter_password' => bcrypt($req->re_enter_password),
        'created_at' => now(),
        'updated_at' => now()
    ]);

    // Redirect to welcome page with success message
    return redirect()->route('welcome')->with('success', 'Registration successful!');
}
    
    public function editUser(Request $req)
    {
        $singleUser = DB::table('users')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('login.editUser', ["data" => $singleUser]);
    }

    public function updateUser(Request $req)
    {
        $updateUser = DB::table('users')->where('id', $req->id)->update([
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password,
                're_enter_password' => $req->re_enter_password,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        if ($updateUser) {
            return redirect()->route('home')->with('success', 'Song updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Error updating song.');
        }
    }

    public function deleteUser(String $id)
    {
        $delete  = DB::table('users')->where('id', $id)->delete();
        // return $id;

        if ($delete) {
            return redirect()->route('home');
        } else {
            return 'An Error Occurd';
        }
    }
}
