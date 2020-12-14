<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class LogoutController extends Controller
{   
    public function __construct()
    {
         
    }
    public function logout(Request $request) {
        $request->session()->forget('username');
        return redirect()->back();
    }
}
