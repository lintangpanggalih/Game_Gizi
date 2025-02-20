<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameToken extends Model
{
    use HasFactory;
    protected $table = 'tokens';
    protected $guarded = [];
}
