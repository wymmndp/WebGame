<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use function Psy\debug;

class GameHaving extends Model
{
    protected $table = 'gamehaving';
    public $timestamps = false;
    public $incrementing = false;
    public static function getAllGame() {
        
    }
    public static function giftGame($idgame,$listUsername) {
        foreach($listUsername as $username) {
            if($username!="") {
                $game = new GameHaving();
                $game->username = $username;
                $game->idgame = $idgame;
                $game->type = "gift";
                $game->timehaving = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
                $game->save();
            }
        }
        return true;
    }
    // delete row and refund coin if user have game
    public static function deleteGame($idgame) {
        $game = \App\Game::find($idgame);
        $coin = $game->coin;
        $alluserhavegame = GameHaving::where('idgame','=',$idgame)->get();
        foreach($alluserhavegame as $user) {
            $account = \App\Account::find($user->username);
            $account->coinhave += $coin;
            $account->allcoin += $coin;
            $account->save();
        }
        \App\GameHaving::where('idgame','=',$idgame)->delete();
        return true;
    }
}
