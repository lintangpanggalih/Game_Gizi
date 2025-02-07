<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public static $stages = [];

    public function sessionHandler(Request $request) 
    {
        $stage = $request->stage;
        $stages = session('game-stages');
        $stages[$stage] = $request->all();
        session()->put('game-stages', $stages);
        
        $game_stages = session('game-stages');
        return $game_stages;
    }
}
