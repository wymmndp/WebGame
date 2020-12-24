<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    public static function getGameSearch($namegame) {
        $allSearchGame = Game::join('danhmuc','iddm','=','iddanhmuc')->where('namegame','like',"%".$namegame."%")->paginate(10);
        return $allSearchGame;
    }
}
