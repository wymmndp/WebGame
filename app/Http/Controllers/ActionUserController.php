<?php

namespace App\Http\Controllers;


use App\PreInvoice;
use Illuminate\Http\Request;

class ActionUserController extends Controller
{   
    public function __construct()
    {
       
    }
    
    public function default() {
        $gamenew = \App\Game::orderby('time','DESC')->take(12)->get();
        $gamerandom = \App\Game::inRandomOrder()->take(12)->get();
        return view('user.layout.index',['gamenew'=>$gamenew,'gamerandom'=>$gamerandom]);
    }
    public function viewGameFromCategory(Request $request) {
        $gameincategories = \App\Game::where('iddm','=',$request->iddm)->paginate(12);
        $categories = \App\DanhMuc::where('iddanhmuc','=',$request->iddm)->first();
        return view('user.layout.viewfromcategories',compact($gameincategories),['gameincategories'=>$gameincategories,'categories'=>$categories]);
    }
    public function searchGame(Request $request) {
        $searchname = $request->namesearch;
        $allgamesearch = \App\Game::getGameSearch($searchname,0,0,10);
        $count = count($allgamesearch);
        return view('user.action.viewsearch',compact($allgamesearch),['allgamesearch'=>$allgamesearch,'count'=>$count,'content'=>$searchname]);
    }
    public function searchCoin(Request $request) {
        $content = $request->content;
        $mincoin = $request->mincoin;
        $maxcoin = $request->maxcoin;
        $allgamesearch = \App\Game::getGameSearch($content,$mincoin,$maxcoin,10);
        $count = count($allgamesearch);
        return view('user.action.searchgamebycoin',compact($allgamesearch),['allgamesearch'=>$allgamesearch,'count'=>$count,'content'=>$content]);
    }
    public function viewAllCategories() {
        return view('user.layout.viewallcategories');
    }
    public function viewDetailGame(Request $request) {
        $idgame = $request->idgame;
        $checkhavegame = 0;
        $game = \App\Game::where('id','=',$idgame)->first();
        if(session()->has('username')) {
            $username = session()->get('username');
            $checkhavegame = \App\Account::checkAccountHaveGame($username,$idgame);
            if($checkhavegame>0) {
                return view('user.layout.detailgame',['game'=>$game,'havegame'=>$checkhavegame]);
            }
        }
        return view('user.layout.detailgame',['game'=>$game,'havegame'=>$checkhavegame]);
    }
    public function addProductToCart(Request $request) {
        $username = $request->username;;
        $idgame = $request->id;
        $count = \App\PreInvoice::checkProductInCart($username,$idgame);
        if($count>0) {
            return "Sản phẩm đã có trong giỏ hàng";
        } else {
            $preinvoice = new PreInvoice();
            $preinvoice->username =  $username;
            $preinvoice->idgame =  $idgame;
            $preinvoice->save();
            return "Thêm sản phẩm thành công";
        }
    }
    public function loadCoin(Request $request) {
        $username = $request->username;
        $coinhave = \App\Account::where('username','=',$username)->select('coinhave')->sum('coinhave');
        $precoin = \App\PreInvoice::join('game', 'game.id', '=', 'pre_invoices.idgame')->where('username','=',$username)->sum('coin');
        $coinminus = $coinhave - $precoin;
        return ['coinhave'=>$coinhave,'precoin'=>$precoin,'coinminus'=>$coinminus];
    }
    public function loadPreInvoice(Request $request) {
        $username = $request->username;
        $preinvoices = \App\PreInvoice::join('game', 'game.id', '=', 'pre_invoices.idgame')->where('username','=',$username)->select('idgame','namegame','coin')->get();
        return $preinvoices;
    }
    public function removeGameFromCart(Request $request) {
        $username = $request->username;
        $idgame = $request->id;
        if(\App\PreInvoice::removeGameFromCart($username,$idgame)>0) {
            return "Xoá hàng thành công";
        } else return "Xoá thất bại";
    }
    public function buy(Request $request) {
        $username = $request->username;
        $listid = $request->listIDgame;
        if(\App\Invoice::addInvoice($username)) {
            \App\DetailInvoice::addDetailInvoice($username,$listid);
            \App\PreInvoice::buySuccess($username,$listid);
            return "Thanh toán thành công";
        } else return "Thanh toán thất bại";
    }
    public function test() {
        return view('user.layout.test');
    }
    public function playGame(Request $request) {
        if(session()->has('username')) {
            $username = session()->get('username');
            $detailAccount = \App\Account::getDetailAccount($username);
            $idgame = $request->idgame;
            $getListCommentRoot = \App\Comment::getListCommentRoot($idgame);
            $getListCommentReply = \App\Comment::getListReplyComment($idgame);
            $game = \App\Game::getGameDetail($idgame);
            return view('user.action.playgame',['detailAccount'=>$detailAccount,'idgame'=>$idgame,"listCommentRoot"=>$getListCommentRoot,"listReplyComment"=>$getListCommentReply,'game'=>$game]);
        } else return redirect('login');
    }
    public function addCommentRoot(Request $request) {
        $username = $request->username;
        $txt = $request->txt;
        $idgame = $request->idgame;
        if(\App\Comment::addCommentRoot($username,$txt,$idgame)) {
            return "Thêm Bình Luận Thành Công";
        } else return "Thêm Bình Luận Thất Bại";    
    }
    public function replyComment(Request $request) {
        $username = $request->username;
        $replytxt = $request->replytxt;
        $idgame = $request->idgame;
        $replyidcomment = $request->replyidcomment;
        $idroot = $request->idroot;
        if(\App\Comment::replyComment($username,$replyidcomment,$idgame,$replytxt,$idroot)) {
            return 'Trả lời bình luận thành công';
        } else return 'Trả lời bình luận thất bại';
    }
    public function loadListComment(Request $request) {
        $idgame = $request->idgame;
        $getListCommentRoot = \App\Comment::getListCommentRoot($idgame);
        $getListCommentReply = \App\Comment::getListReplyComment($idgame);
        return view('user.action.comment',["listCommentRoot"=>$getListCommentRoot,"listReplyComment"=>$getListCommentReply]);
    }
    public function getDetailUser() {
        if(session()->has('username')) {
            $account = \App\Account::getDetailAccount(session()->get('username'));
            return view('user.layout.detailuser',['account'=>$account]);
        } else return redirect('login');
    }
    public function updateInformationUser(Request $request) {
        $username = $request->username;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $avatar = $request->avatar;
        $email = $request->email;
        $oldpass = $request->oldpass;
        $newpass = $request->newpass;
        if(\App\Account::updateInformation($username,$firstname,$lastname,$avatar,$email,$oldpass,$newpass)==1) {
            return 1;
        } else if(\App\Account::updateInformation($username,$firstname,$lastname,$avatar,$email,$oldpass,$newpass)==-1) {
            return -1;
        }
    }
    public function upGame(Request $request) {
        $username = $request->username;
        $namegame = $request->namegame;
        $imggame = $request->imggame;
        $linkgame = $request->linkgame;
        $description = $request->description;
        $coin = $request->coin;
        $theloai = $request->theloai;
        if(\App\UserUpGame::newupgame($username,$namegame,$imggame,$linkgame,$description,$coin,$theloai)) {
            return true;
        } else return false;
    }
}   