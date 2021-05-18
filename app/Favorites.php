<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Favorites extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'game_favorites';
    public $incrementing = false;
    public $timestamps = false;
    public static function userFavoriteGame($username,$idgame){
        $favorite = new Favorites();
        $favorite->username = $username;
        $favorite->idgame = $idgame;
        $favorite->time_favorite = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $favorite->save();
        return true;
    }
    public static function userUnFavoriteGame($username,$idgame) {
        Favorites::where("username","=",$username)->where("idgame","=",$idgame)->delete();
        return true;
    }
    public static function listGameUserFavorite($username) {
        $listIDGameFavorites = "";
        $listGame = Favorites::where("username","=",$username)->get();

        foreach($listGame as $game) {
            $listIDGameFavorites .= strval($game->idgame).",";
        }
        return $listIDGameFavorites;
    }
}
