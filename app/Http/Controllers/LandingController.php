<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function map()
    {
        return view('games.map');
    }

    public function card()
    {
        return view('games.card');
    }

    public function word()
    {
        return view('games.word');
    }

    public function quiz()
    {
        return view('games.quiz');
    }

    public function drag()
    {
        return view('games.drag');
    }

    public function biodata()
    {
        return view('biodata');
    }

    public function registration()
    {
        if (auth()->user()) {
            return redirect()->route('landing.map');
        }
        return view('registration');
    }

    public function cardrule()
    {
        return view('cardrule');
    }

    public function wordrule()
    {
        return view('wordrule');
    }
}
