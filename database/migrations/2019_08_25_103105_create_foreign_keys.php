<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('team_players', function (Blueprint $table) {
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    public function down()
    {
        Schema::table('team_players', function (Blueprint $table) {
            $table->dropForeign('team_players_team_id_foreign');
            $table->dropForeign('team_players_player_id_foreign');
        });

    }
}
