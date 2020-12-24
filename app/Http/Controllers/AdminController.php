<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{   
    public function __construct()
    {
      
    }
    public function dashboard() {
        return view('admin.layout.dashboard');
    }
    public function getNewGame() {
        return view('admin.action.newgame');
    }
    public function getAllUser() {
        return view('admin.action.alluser');
    }
    public function getAllCategories() {
        return view('admin.layout.alldanhmuc');
    }
}
