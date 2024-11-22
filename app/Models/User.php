<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'gender',
        'birth_date',
        'whatsapp_number',
        'weight',
        'height',
    ];
}
