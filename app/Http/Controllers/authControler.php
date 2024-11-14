<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthControler extends Controller
{
    // Show Login Form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Show Register Form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle Register Form Submission
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:100|unique:userss,username',
            'password' => 'required|min:6|confirmed',
            'status' => 'required|in:admin,user'
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    // Handle Login Form Submission
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirect based on the user's status
        if (Auth::user()->status === 'admin') {
            return redirect()->route('admin.index')->with('success', 'Welcome Admin!');
        } else {
            return redirect('/')->with('success', 'Welcome back!');
        }
    }

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
}

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
