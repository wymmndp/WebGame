<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class DetailInvoice extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'detail_invoice';
    public $timestamps = false;
    public static function addDetailInvoice($username,$listID) {
        $id_invoice = Invoice::where('username','=',$username)->orderBy('id_invoice','desc')->first();
        foreach($listID as $idgame) {
            $detail_invoice = new DetailInvoice();
            $detail_invoice->id_invoice = $id_invoice->id_invoice;
            $detail_invoice->idgame = $idgame;
            $detail_invoice->save();
        }
    }
}
