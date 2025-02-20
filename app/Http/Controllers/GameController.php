<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public static $stages = ['init'];

    public function sessionHandler(Request $request)
    {
        $stage = $request->stage;
        $stages = session('game-stages');
        $stages[$stage] = $request->all();
        session()->put('game-stages', $stages);

        $game_stages = session('game-stages');
        return $game_stages;
    }

    public function storeResult(Request $request)
    {
        $stage = $request->stage;
        $game_stages = session('game-stages');

        // Auth::logout();
        session()->forget('game-stages');
        return $game_stages;
    }
}
