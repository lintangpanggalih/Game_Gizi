<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showRegisterForm()
    {
        if (session('game-stages')) {
            return redirect()->route('landing.map');
        }

        return view('registration');
    }

    public function register(Request $request)
    {
        $user = User::create($request->all());

        $stages = session()->get('game-stages');
        if (empty($stages)) {
            session()->put('game-stages', ['user' => $user]);
            // return 'game is not started';
        }

        return redirect()->route('landing.map');
    }

    public function show()
    {
        $userdata = User::all();
        return view('admin', ['users' => $userdata]);
    }
}
