<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'comments';
    protected $primaryKey = 'idcomments';
    public $timestamps = false;
    public static function addCommentRoot($username,$txt,$idgame) {
        $comment = new Comment();
        $comment->username = $username;
        $comment->content = $txt;
        $comment->idgame = $idgame;
        $comment->replyidcomments = -1;
        $comment->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $comment->save();
        return true;
    }
    public static function replyComment($usernamereply,$replyidcomment,$idgame,$replytxt,$idroot) {
        $comment = new Comment();
        $comment->username = $usernamereply;
        $comment->idgame = $idgame;
        $comment->replyidcomments = $replyidcomment;
        $comment->content = $replytxt;
        $comment->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $comment->replyusername = Comment::find($replyidcomment)->username;
        $comment->idroot = $idroot;
        $comment->save();
        return true;
    }
    public static function getListCommentRoot($idgame) {
        $getListCommentRoot = Comment::join('account','comments.username','=','account.username')->where('comments.idgame','=',$idgame)->where('replyidcomments','=','-1')->orderBy('time','desc')->select('idcomments','account.username','content','comments.time','avatar','idroot')->get();
        return $getListCommentRoot;
    }
    public static function getListReplyComment($idgame) {
        $getListReplyComment = Comment::join('account','comments.username','=','account.username')->where('comments.idgame','=',$idgame)->orderBy('time','asc')->select('idcomments','account.username','content','comments.time','avatar','replyidcomments','idroot')->get();
        return $getListReplyComment;
    }
    public static function deleteAllCommentInGame($idgame) {    
        Comment::where('idgame','=',$idgame)->delete();
        return true;
    }
}
