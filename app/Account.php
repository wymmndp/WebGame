<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Account extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'account';
    protected $primaryKey = 'username';
    public $timestamps = false;
    public static function login($username,$password) {
        $count = Account::where('username','=',$username)->where('password','=',$password)->count();
        return $count;
    }
    public static function checkUsername($username) {
        $count = Account::where('username','=',$username)->count();
        if($count>0) {
            return true;
        } else return false;
    }
    public static function register($username,$password) {
        $account = new Account();
        $account->username = $username;
        $account->password = $password;
        $account->type = "member";
        $account->save();
        return true;
    }
    public static function getDetailAccount($username) {
        $detailAccount = Account::find($username);
        return $detailAccount;
    }
}
