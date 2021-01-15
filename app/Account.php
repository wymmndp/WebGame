<?php

namespace App;

use Dotenv\Validator;
use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Account extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'account';
    protected $primaryKey = 'username';
    public $timestamps = false;
    public $incrementing = false;
    public static function login($username,$password) {
        $account = Account::where('username','=',$username)->where('password','=',$password)->first();
        return $account;
    }
    public static function checkUsername($username) {
        $count = Account::where('username','=',$username)->count();
        if($count>0) {
            return true;
        } else return false;
    }
    // all account
    public static function getAllAccount() {
        $allAccount = Account::paginate(10);
        return $allAccount;
    }
    // account haven't game
    public static function getAllAccountDontHaveGame($idgame) {
        $allAccount = Account::whereNotIn('username',function($query) use ($idgame) {
            $query->select('account.username')->from('account')->join('gamehaving','account.username','=','gamehaving.username')->where('idgame','=',$idgame);
        })->paginate(10);
        return $allAccount;
    }
    public static function checkAccountHaveGame($username,$idgame) {
        $count = Account::join('gamehaving','account.username','=','gamehaving.username')->where('account.username','=',$username)->where('idgame','=',$idgame)->count();
        return $count; 
    }
    public static function searchUsername($username,$shownumber) {
        if($shownumber>0) { 
            $allSearchName = Account::where('username','like',"%".$username."%")->paginate($shownumber);
        }
        if($shownumber==-1) {
            $count = Account::get()->count();
            $allSearchName = Account::where('username','like',"%".$username."%")->paginate($count);
        }
        return $allSearchName;
    }
    public static function register($username,$password) {
        $account = new Account();
        $account->username = $username;
        $account->password = $password;
        $account->type = "member";
        $account->allcoin = 0;
        $account->coinhave = 0;
        $account->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $account->save();
        return true;
    }
    public static function getDetailAccount($username) {
        $detailAccount = Account::find($username);
        return $detailAccount;
    }
    public static function updateInformation($username,$firstname,$lastname,$avatar,$email,$oldpass,$newpass) {
        $account = Account::find($username);
        if($firstname!="") {
            $account->firstname = $firstname;
        }
        if($lastname!="") {
            $account->lastname = $lastname;
        }
        if($avatar!="") {
            $account->avatar = $avatar;
        }
        if($email!="") {
            $account->email = $email;
        }
        if($oldpass!="" && $newpass!="") {
            if($account->password==$oldpass) {
                $account->password = $newpass;
            } else return -1;
        }
        $account->save();
        return 1;
    }
    private static function receiveCoin($senduser,$receiveuser,$coin) {
        $account = Account::find($senduser);
        $account->coinhave += (int)$coin;
        $account->save();
        $detail = $senduser . " nhận " . $coin . " từ " . $receiveuser;
        \App\History::newhistory($senduser,$receiveuser,$detail);
    }
    public static function giftCoin($senduser,$receiveuser,$coin) {
        $detail = $senduser . " gửi " . $coin . " cho " . $receiveuser;
        \App\History::newhistory($senduser,$receiveuser,$detail);
        Account::receiveCoin($receiveuser,$senduser,$coin);
        return true;
    }
}
