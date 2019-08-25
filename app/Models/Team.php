<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->hasManyThrough(Player::class, TeamPlayer::class);
    }

    public function teamPlayers()
    {
        return $this->hasMany(TeamPlayer::class);
    }
}
