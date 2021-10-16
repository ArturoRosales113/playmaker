<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'league_id',
        'icon_path',
        'img_path'
    ];

    public function league()
    {
        return $this->belongsTo('App/Models/League');
    }
}


