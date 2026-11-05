<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showSignup()
    {
        return view('dashboard_layout.sign_up');
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|min:2|max:100',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'username' => 'required|string|min:4|max:30|alpha_num|unique:users,username',
            'password' => 'required|string|min:6|max:50',
        ]);

        User::create([
            'fullname' => $validated['fullname'],
            'address' => $validated['address'],
            'age' => $validated['age'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            
        ]);
        
        return redirect()->route('login')
            ->with('success', 'Account created successfully. Please login.');
    }

    public function showLogin()
    {
        return view('dashboard_layout.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'username' => $validated['username'],
            'password' => $validated['password'],
        ])) {
            $request->session()->regenerate();

            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'username' => 'Invalid username or password.'
        ])->withInput();
    }

    public function homepage()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.homepage');
    }

    public function chat()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.chat');
    }

    public function calendar()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.calendar');
    }

    public function onlineClasses()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.online_classes');
    }

    public function logoutPage()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
    }
}