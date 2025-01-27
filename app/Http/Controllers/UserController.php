<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'full_name' => 'required|string|max:255',
        //     'gender' => 'required|in:Laki-Laki,Perempuan',
        //     'birth_date' => 'required|date',
        //     'whatsapp_number' => 'required|string|max:15',
        //     'weight' => 'required|numeric',
        //     'height' => 'required|numeric',
        // ]);
        // return $request->all();
        $user = User::create($request->all());

        Auth::login($user);
        // return auth()->user();
        return redirect()->route('landing.map');
    }

    public function show(){
        $userdata = User::all();
        return view('admin', ['users'=>$userdata]);
    }
}

