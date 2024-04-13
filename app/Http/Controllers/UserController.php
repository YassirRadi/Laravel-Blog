<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // show Sign up form
    public function register()
    {
        return view('register');
    }

    // register a new user
    public function create(Request $request)
    {
        $validated = $request->validate([
            'firstname' => ['required', 'max:50', 'min:2'],
            'lastname' => ['required', 'max:50', 'min:2'],
            'email' => ['required', 'unique:users', 'email', 'max:255', 'min:5'],
            'password' => ['required', 'max:255', 'min:8']
        ]);

        $fullName = $validated['firstname'] . ' ' . $validated['lastname'];

        $validated['password'] = Hash::make($validated['password']);

        $userData = ['name' => $fullName, 'email' => $validated['email'], 'password' => $validated['password']];

        $user = User::create($userData);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Hello Mr/Ms ' . $fullName);
    }

    // show form login 
    public function login()
    {
        return view('login');
    }

    // login authentication
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255', 'min:5'],
            'password' => ['required', 'max:255', 'min:8']
        ]);

        $remember = true;
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', "welcome Back 😊");
        }

        return back()->withErrors(['invalid' => 'Invalid email or password']);
    }

    // logout 
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
