<?php

namespace App\Http\Controllers\api;

use App\Account;
use App\AccountSession;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginAPIController extends Controller
{
    public function login(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $accountSession = null;
        if(Account::apiLogin($username,$password)!=null) {
            if(AccountSession::check($username)==null) {
                $accountSession = AccountSession::createToken($username,Str::random(60),date("Y-m-d H:i:s",strtotime("+30 day")),Str::random(40),date("Y-m-d H:i:s",strtotime("+360 day")));
            }
            else { $accountSession = AccountSession::check($username); }
            return $accountSession;
        } else {
            return response()->json([
                "code" => 401,
                "message" => "Tài khoản hoặc mật khẩu không chính xác"
            ],401);
        }
       
    }
}
