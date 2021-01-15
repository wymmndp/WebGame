<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware(function($request,$next) {
            $detail = \App\Account::getDetailAccount(session()->get('admin'));
            view()->share('detailadmin', $detail);
            return $next($request);
        });
    }
    public function dashboard() {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            return view('admin.layout.dashboard');
        }
    }
    public function getNewGame() {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $alldanhmuc = \App\DanhMuc::getAllCategories();
            return view('admin.action.game.newgame',["alldanhmuc"=>$alldanhmuc]);
        }
    }
    public function getAllUser() {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $allAccount = \App\Account::getAllAccount();
            return view('admin.action.user.alluser',compact($allAccount),["allaccount"=>$allAccount]);
        }
    }
    public function getAllCategories() {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $allcategories = \App\DanhMuc::getAllCategories();
            return view('admin.layout.alldanhmuc',['allcategories'=>$allcategories]);
        }
    }
    public function getAllGame() {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $allgame = \App\Game::getAllGame();
            return view('admin.layout.allgame',['allgame'=>$allgame]);
        }
    }
    public function getSeeUser(Request $request) {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $username = $request->username;
            $account = \App\Account::getDetailAccount($username);
            return view('admin.action.user.seeuser',["account"=>$account]);
        }
    }
    public function getDanhMuc(Request $request) {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $iddm = $request->iddm;
            $danhmuc = DanhMuc::getCategory($iddm);
            return $danhmuc;
        }
    }
    public function getDetailGame(Request $request) {
        if(!session()->has('admin')) {
            return redirect('admin/login');
        }
        else {
            $game = \App\Game::getGameDetail($request->idgame);
            $allAccount = \App\Account::getAllAccountDontHaveGame($request->idgame);
            $alldanhmuc = \App\DanhMuc::getAllCategories();
            return view('admin.action.game.detailgame',['game'=>$game,'allaccount'=>$allAccount,'alldanhmuc'=>$alldanhmuc]);
        }
    }
    public function addDanhMuc(Request $request) {
        $tendanhmuc = $request->tendanhmuc;
        $imgdanhmuc = $request->imgdanhmuc;
        if(DanhMuc::addDanhMuc($tendanhmuc,$imgdanhmuc)) {
            return "Thêm danh mục thành công";
        } else return "Thêm danh mục thất bại";
    }
    public function updateDanhMuc(Request $request) {
        $iddm = $request->iddm;
        $tenmoi = $request->tenmoi;
        $imgdanhmuc = $request->imgdanhmuc;
        if(DanhMuc::updateCategory($iddm,$tenmoi,$imgdanhmuc)) {
            return "Sửa danh mục thành công";
        } else return "Sửa danh mục thành công";
    }
    public function deleteDanhMuc(Request $request) {
        $iddm = $request->iddm;
        if(DanhMuc::deleteCategory($iddm)) {
            return "Xoá danh mục thành công";
        } else return "Xoá danh mục thất bại";
    }
    public function updateInformation(Request $request) {
        $username = $request->username;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $avatar = $request->avatar;
        $email = $request->email;
        $oldpass = $request->oldpass;
        $newpass = $request->newpass;
        if(\App\Account::updateInformation($username,$firstname,$lastname,$avatar,$email,$oldpass,$newpass)) {
            return true;
        } else return false;     
    }
    public function searchUser(Request $request) {
        $txtSearch = $request->txtSearch;
        $shownumber = $request->shownumber;
        $allaccount = \App\Account::searchUsername($txtSearch,$shownumber);
        return view('admin.action.user.paginationuser',compact($allaccount),['allaccount'=>$allaccount]);
    }
    public function searchGameAdmin(Request $request) {
        $txtSearch = $request->txtSearch;
        $shownumber = $request->shownumber;
        $allgame = \App\Game::getGameSearch($txtSearch,0,0,$shownumber);
        return view('admin.action.game.paginationgame',compact($allgame),['allgame'=>$allgame]);
    }
    public function addgame(Request $request) {
        $imggame = $request->imggame;
        $namegame = $request->namegame;
        $description = $request->description;
        $linkgame = $request->linkgame;
        $iddm = $request->iddanhmuc;
        $coin = $request->coin;
        if(\App\Game::newGame($imggame,$namegame,$description,$linkgame,$coin,$iddm)) {
            return true;
        } else return false;
    }
    public function updategame(Request $request) {
        $imggame = $request->imggame;
        $namegame = $request->namegame;
        $idgame = $request->idgame;
        $description = $request->description;
        $iddm = $request->iddm;
        $linkgame = $request->linkgame;
        $coin = $request->coin;
        if(\App\Game::updateGame($idgame,$imggame,$namegame,$description,$linkgame,$coin,$iddm)) {
            return true;
        } else return false;
    }
    public function deletegame(Request $request) {
        $idgame = $request->idgame;
        if(\App\Game::deleteGame($idgame)) {
            return true;
        } else return false;
    }
    public function giftgame(Request $request) {
        $idgame = $request->idgame;
        $listusername = $request->listusername;
        if(\App\GameHaving::giftGame($idgame,$listusername)) {
            return true;
        }
    }
    public function giftcoin(Request $request) {
        $senduser = $request->senduser;
        $receiveuser = $request->receiveuser;
        $coin = $request->coin;
        if(\App\Account::giftCoin($senduser,$receiveuser,$coin)) {
            return true;
        }
    }
    public function test() {
        dd(\App\GameHaving::deleteGame(2));
    }
}