<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class History extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'history';
    public $timestamps = false;
    public static function newhistory($senduser,$receiveuser,$detail) {
        $history = new History();
        $history->senduser = $senduser;
        $history->receiveuser = $receiveuser;
        $history->detail = $detail;
        $history->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $history->save();
    }
}
