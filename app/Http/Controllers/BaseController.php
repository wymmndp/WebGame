<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class BaseController extends Controller
{
    public function __construct()
  {
        $danhmuc = \App\DanhMuc::all();
        view()->share(['danhmuc'=>$danhmuc]);
  }
}
