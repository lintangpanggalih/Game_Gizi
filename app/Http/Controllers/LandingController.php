<?php

namespace App\Http\Controllers;

use App\Models\GameToken;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $request = Request::capture();
        $token = $request->get('game-token');

        $is_permit = GameToken::where('token', $token)->count();
        if (!$is_permit) {
            abort(403);
        }

        return view('app');
    }

    public function map()
    {
        $stages = session()->get('game-stages');

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
}
