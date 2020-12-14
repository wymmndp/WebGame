<?php

namespace App;

use Dotenv\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Invoice extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'invoice';
    public $timestamps = false;
    public static function addInvoice($username) {
        $invoice = new Invoice();
        $invoice->username = $username;
        $invoice->time = \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $invoice->save();
        return true;
    }
}
