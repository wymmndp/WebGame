<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    public $timestamps = false;
    public $incrementing = false;
    public static function getAllGame() {
        $allgame = Game::join('danhmuc','iddm','=','iddanhmuc')->paginate(10);
        return $allgame;
    }
    public static function getGameDetail($idgame) {
        $game = Game::join('danhmuc','iddm','=','iddanhmuc')->where("game.id",'=',$idgame)->first();
        return $game;
    }
    public static function getGameSearch($namegame,$mincoin,$maxcoin,$shownumber) {
        if($mincoin == 0 && $maxcoin ==0) {
            if($shownumber>0) {
                $count = \App\Game::getAllGame()->count();
                $allSearchGame = Game::join('danhmuc','iddm','=','iddanhmuc')->where('namegame','like',"%".$namegame."%")->paginate($shownumber);
            }
            if($shownumber==-1) {
                $count = \App\Game::getAllGame()->count();
                $allSearchGame = Game::join('danhmuc','iddm','=','iddanhmuc')->where('namegame','like',"%".$namegame."%")->paginate($count);
            }
        } else {
            $allSearchGame = Game::join('danhmuc','iddm','=','iddanhmuc')->where('namegame','like',"%".$namegame."%")->whereBetween('coin',[$mincoin,$maxcoin])->paginate(10);
        }
        return $allSearchGame;
    }
    public static function newGame($imggame,$namegame,$description,$linkgame,$coin,$iddm) {
        $game = new Game();
        $game->namegame = $namegame;
        $game->imggame = $imggame;
        $game->detailgame = $description;
        $game->linkgame = $linkgame;
        $game->coin = $coin;
        $game->iddm = $iddm;
        $game->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $game->save();
        return true;
    }
    public static function updateGame($idgame,$imggame,$namegame,$description,$linkgame,$coin,$iddm) {
        $game = Game::find($idgame);
        if($imggame!="") {
            $game->imggame = $imggame;
        }
        $game->namegame = $namegame;
        $game->detailgame = $description;
        $game->coin = $coin;
        $game->linkgame = $linkgame;
        $game->iddm = $iddm;
        $game->save();
        return true;
    }
    public static function deleteGame($idgame) {
        $game = Game::find($idgame);
        if(\App\Comment::deleteAllCommentInGame($idgame) && \App\PreInvoice::deleteAllPreInvoiceGame($idgame) && \App\GameHaving::deleteGame($idgame)) {
            $game->delete();
            return true;
        }
    }
}
