<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;

    protected $fillable = [                
        'user_id',
        'refereeType_id',
        'numero',
        'edad',
        'estatura',
        'peso',
        'is_active',
        'icon_path',
        'img_path',
        'licencia',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(RefereeType::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class,'game_referee');
    }
}



