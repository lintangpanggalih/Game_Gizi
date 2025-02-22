<?php

namespace App\Http\Controllers;

use App\Models\GameToken;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function index()
    {
        $userdata = DB::table('respondens')->get();
        return view('admin.users', ['users' => $userdata]);
    }

    public function tokenList()
    {
        $tokens = GameToken::all();
        return view('admin.game-tokens', ['tokens' => $tokens]);
    }

    public function tokenQrcode($id)
    {
        $data = GameToken::findOrFail($id);
        $token = $data->token;
        $url = $data->url . "?game-token={$token}";

        return QrCode::size(500)->generate($url);
    }

    public function generateToken(Request $request)
    {
        DB::beginTransaction();
        try {
            GameToken::create([
                'token' => $request->token,
                'url' => $request->url,
                'description' => $request->description,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            //return response()->json([$th->getMessage()]);
	    return back()->with('error', 'Failed to generate token.')->withInput();
        }

        DB::commit();
        return redirect()->route('admin.token-list');
    }

    public function moodboardResult($user_id = null)
    {
        $results = DB::table('results')
            ->join('answers', 'results.answer_id', 'answers.id')
            ->join('respondens', 'results.responden_id', 'respondens.id')
            ->select('responden_id', DB::raw('DATE(results.created_at) as date'), DB::raw('COUNT("results.id") as correct_answers'))
            ->where('answers.is_correct', 1)
            ->when($user_id, function ($q) use ($user_id) {
                return $q->where('responden_id', $user_id);
            })
            ->groupBy('results.responden_id')
            ->groupBy(DB::raw('DATE(results.created_at)'))
            ->get();

        return $results;
    }
}
