<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public static function get($id)
    {
        $player = Player::findOrFail($id);
        return $player;
    }


    public static function edit(array $args)
    {
        $player = self::get($args['id']);

        $player->full_name = $args['title'];
        $player->city = $args['city'];
        $player->image = $args['image'];
        $player->score = $args['score'];

        $ts = Carbon::parse($args['birth_date']);
        $player->birth_date = $ts->toDateTimeString();

        return $player->save();
    }

    public static function insert(array $args)
    {
        $player = new Player();


        $player->full_name = $args['title'];
        $player->city = $args['city'];
        $player->image = $args['image'];
        $player->score = $args['score'];

        $ts = Carbon::parse($args['birth_date']);
        $player->birth_date = $ts->toDateTimeString();

        return $player->save();
    }


    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_players');
    }



    public function teamPlayer()
    {
        return $this->hasMany(TeamPlayer::class);
    }
}
