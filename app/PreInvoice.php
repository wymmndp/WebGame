<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class PreInvoice extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'pre_invoices';
    public $timestamps = false;
    public static function checkProductInCart($username,$id) {
        $count = PreInvoice::where('username','=',$username)->where('idgame','=',$id)->count();
        return $count;
    }
    public static function removeGameFromCart($username,$id) {
        PreInvoice::where('username','=',$username)->where('idgame','=',$id)->delete();
        return true;
    }
    // remove list game,minus coin after buy success
    public static function buySuccess($username,$listID) {
        $account = Account::find($username);
        $coinhave = \App\Account::where('username','=',$username)->select('coinhave')->sum('coinhave');
        $precoin = \App\PreInvoice::join('game', 'game.id', '=', 'pre_invoices.idgame')->where('username','=',$username)->sum('coin');
        $account->coinhave = $coinhave-$precoin;
        $account->save();
        $gamehaving = new GameHaving();
        foreach($listID as $idgame) {
            PreInvoice::where('username','=',$username)->where('idgame','=',$idgame)->delete();
            $game = new GameHaving();
            $game->username = $username;
            $game->idgame = $idgame;
            $game->type = "buy";
            $game->timehaving = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
            $game->save();
        }
        return true;
    }
    public static function deleteAllPreInvoiceGame($idgame) {
        \App\PreInvoice::where('idgame','=',$idgame)->delete();
        return true;
    }
}
