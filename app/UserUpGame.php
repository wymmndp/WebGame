<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserUpGame extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'useruploadgame';
    public $timestamps = false;
    public $incrementing = false;
    public static function getAll() {
        return UserUpGame::paginate(10);
    }
    public static function getGameInformation($idgame) {
        $game = UserUpGame::find($idgame);
        return $game;
    }
    public static function deleteGame($idgame) {
        $game = UserUpGame::find($idgame);
        $game->delete();
        return true;
    }
    public static function newupgame($username,$namegame,$imggame,$linkgame,$detail,$coin,$theloai) {
        $account = \App\Account::find($username);
        $record = new UserUpGame();
        $record->username = $username;
        $record->namegame = $namegame;
        $record->email = $account->email;
        $record->imggame = $imggame;
        $record->linkgame = $linkgame;
        $record->description = $detail;
        $record->iddm = $theloai;
        $record->videoplay = "";
        $record->coin = $coin;
        $record->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $record->save();
        return true;
    }
}
