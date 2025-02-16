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
        // return $stages = session('game-stages');

        // return auth()->user();
        $stages = session()->get('game-stages');
        if (empty($stages)) {
            session()->put('game-stages', GameController::$stages);
            // return 'game is not started';
        }

        return view('games.map', compact('stages'));
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

    public function cardrule()
    {
        return view('cardrule');
    }

    public function wordrule()
    {
        return view('wordrule');
    }
}
