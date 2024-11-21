<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class CardController extends Controller
{
    public function getCards()
{
    // Ambil semua kartu dan shuffle untuk mengacak
    $cards = Card::inRandomOrder()->get();
    return response()->json($cards);
}
}



