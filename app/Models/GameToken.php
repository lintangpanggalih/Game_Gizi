<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GameToken extends Model
{
    use HasFactory;
    protected $table = 'tokens';
    protected $guarded = [];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string)Str::orderedUuid();
            $model->status = 1;
        });
    }
}
