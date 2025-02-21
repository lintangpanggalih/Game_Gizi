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
        $userdata = User::all();
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
            return back()->with('error', 'Failed to generate token.')->withInput();
        }

        DB::commit();
        return redirect()->route('admin.token-list');
    }
}
