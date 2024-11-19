<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function signUp(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ]);

        // Check if user already exists with exact name, email, and password
        $existingUser = User::where('name', $request->name)
                            ->where('email', $request->email)
                            ->first();

        if ($existingUser) {
            // If user exists, redirect to welcome route
            return redirect()->route('welcome');
        } else {
            // If user doesn't exist, show error under password field
            return back()->with([
                'error' => 'Incorrect fields',
                'name' => $request->name,
                'email' => $request->email
            ]);
        }
    }
}