<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'username' => 'required|string|min:4|max:30|alpha_num',
            'password' => 'required|string|min:6|max:50',
        ]);

        session([
            'registered_user' => [
                'fullname' => $validated['fullname'],
                'address' => $validated['address'],
                'age' => $validated['age'],
                'username' => $validated['username'],
                'password' => $validated['password'],
            ]
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

        $registeredUser = session('registered_user');

        if (!$registeredUser) {
            return back()->withErrors([
                'username' => 'No account found. Please sign up first.'
            ])->withInput();
        }

        if (
            $validated['username'] === $registeredUser['username'] &&
            $validated['password'] === $registeredUser['password']
        ) {
            session([
                'logged_in' => true,
                'user' => $registeredUser
            ]);

            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'username' => 'Invalid username or password.'
        ])->withInput();
    }

    public function homepage()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.homepage');
    }

    public function chat()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.chat');
    }

    public function calendar()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.calendar');
    }

    public function onlineClasses()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.online_classes');
    }

    public function logoutPage()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard_layout.logout');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['logged_in', 'user']);

        return redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
    }
}