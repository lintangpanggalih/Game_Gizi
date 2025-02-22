<?php

namespace App\Http\Controllers;

use App\Models\Scoring;
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
        // return auth()->user();
        return $game_stages;
    }

    public function storeResult(Request $request)
    {
        $stage = $request->stage;
        $game_stages = session('game-stages');
        $user = $game_stages['user'];
        unset($game_stages['user']);
        // Auth::logout();

        $scores = [];
        foreach ($game_stages as $stage => $data) {
            $scores[] = Scoring::create([
                'user_id' => $user['id'] ?? 0,
                'stage' => $data['stage'] ?? 0,
                'score' => $data['score'] ?? 0,
            ]);
        }

        session()->forget('game-stages');
        return [$game_stages, $user, $scores];
    }
}
