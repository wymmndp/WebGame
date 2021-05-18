<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountSession extends Model
{
    protected $table = 'accounts_session';
    protected $primaryKey = 'username';
    public $timestamps = false;
    public $incrementing = false;
    public static function check($username) {
        $check = AccountSession::where("username","=",$username)->first();
        return $check;
    }
    public static function createToken($username,$token,$token_expired,$refresh_token,$refresh_token_expired) {
        $accountSession = new AccountSession();
        $accountSession->username = $username;
        $accountSession->token = $token;
        $accountSession->token_expired = $token_expired;
        $accountSession->refresh_token = $refresh_token;
        $accountSession->refresh_token_expired = $refresh_token_expired;
        $accountSession->save();
        return $accountSession;
    }
    public static function checkTokenValid($token) {
        $token = AccountSession::where("token","=",$token)->first();
        if($token!=null) {
            if(strtotime($token->token_expired) - strtotime(date("Y-m-d H:i:s")) < 0) {
                return "expired";
            } else {
                return $token;
            }
        } else {
            return false;
        }
    }
}
