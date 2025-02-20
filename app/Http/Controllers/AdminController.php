<?php

namespace App\Http\Controllers;

use App\Models\GameToken;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function generateToken(Request $request)
    {
        return $request->all();
    }
}
