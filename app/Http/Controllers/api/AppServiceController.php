<?php

namespace App\Http\Controllers\api;

use App\Account;
use App\AccountSession;
use App\DanhMuc;
use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppServiceController extends Controller
{
    public function getListCategory() {
        return DanhMuc::all();
    }
    public function getListNewGame() {
        return Game::getListNewGame();
    }
    public function getListGameSale() {
        return Game::getListGameSale();
    }
}
