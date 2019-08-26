<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public static function insert(array $args)
    {
        $team = new Team();
        $team->name = $args['name'];
        $team->city = $args['city'];
        $team->image = $args['image'];

        return $team->save();

    }

    public static function get($id)
    {
        $team = Team::findOrFail($id);
        return $team;
    }

    public static function edit(array $args)
    {
        $team = self::get($args['id']);

        $team->name = $args['title'];
        $team->city = $args['city'];
        $team->image = $args['image'];

        return $team->save();
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'team_players');
    }

    public function teamPlayers()
    {
        return $this->hasMany(TeamPlayer::class);
    }
}
