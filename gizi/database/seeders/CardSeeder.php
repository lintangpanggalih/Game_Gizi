<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            ['name' => 'Card 1', 'image' => 'card1.png'],
            ['name' => 'Card 2', 'image' => 'card2.png'],
            ['name' => 'Card 3', 'image' => 'card3.png'],
            ['name' => 'Card 4', 'image' => 'card4.png'],
            ['name' => 'Card 5', 'image' => 'card5.png'],
            ['name' => 'Card 6', 'image' => 'card6.png'],
            ['name' => 'Card 7', 'image' => 'card7.png'],
            ['name' => 'Card 8', 'image' => 'card8.png'],
            // Tambahkan lebih banyak kartu
        ];
    
        foreach ($cards as $card) {
            Card::create($card);
            Card::create($card);
        }
    }
}
