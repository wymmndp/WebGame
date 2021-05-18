<?php

namespace App\Http\Controllers\api;

use App\Account;
use App\AccountSession;
use App\Favorites;
use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserServiceController extends Controller
{
    public function getUser(Request $request) {
        $token = $request->token;
        $result = AccountSession::checkTokenValid($token);
        if($result=="expired") {
            return response()->json([
                "code" => 400,
                "message" => "Token Expired"
            ],200);
        } else if($result==null) {
            return response()->json([
                "code" => 404,
                "message" => "Token không tồn tại"
            ],404);
        } else {
            $description_user = Account::getDetailAccount($result->username);
            return response()->json([
                "code" => 200,
                "description_user" => $description_user
            ],200);
        }
    }
    public function favorite(Request $request) {
        $token = $request->token;
        $idgame = $request->idgame;
        $resultCheck = AccountSession::checkTokenValid($token);
        if($resultCheck=="expired") {
            return "expired";
        } else if($resultCheck!=null) {
            $username = $resultCheck->username;
            if(Favorites::userFavoriteGame($username,$idgame)) {
                return response()->json([
                    "code" => 200,
                    "message" => "Favorite",
                ],200);
            }
        } else if($resultCheck==false) {
            return "Token does not exist";
        }
    }
    public function unFavorite(Request $request) {
        $token = $request->token;
        $idgame = $request->idgame;
        $resultCheck = AccountSession::checkTokenValid($token);
        if($resultCheck=="expired") {
            return "expired";
        } else if($resultCheck!=null) {
            $username = $resultCheck->username;
            if(Favorites::userUnFavoriteGame($username,$idgame)) {
                return response()->json([
                    "code" => 200,
                    "message" => "Unfavorite",
                ],200);
            }
        } else if($resultCheck==false) {
            return "Token does not exist";
        }
    }
    public function getListGameFavorite(Request $request) {
        $token = $request->token;
        $resultCheck = AccountSession::checkTokenValid($token);
        if($resultCheck == "expired") {
            return "expired";
        } else if($resultCheck!=null) {
            $username = $resultCheck->username;
            return response()->json([
                "code" => 200,
                "username" => $username,
                "listGameFavorites" => Game::getListGameFavorite(explode(",",Favorites::listGameUserFavorite($username))),
            ],200);
        } else if($resultCheck==false) {
            return "Token does not exist";
        }
    }
}
