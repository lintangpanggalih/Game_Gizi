<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-Laki,Perempuan',
            'birth_date' => 'required|date',
            'whatsapp_number' => 'required|string|max:15',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        User::create($request->all());

        return redirect()->route('landing.map');
    }
}

