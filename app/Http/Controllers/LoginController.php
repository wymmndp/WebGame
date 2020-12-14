<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{   
    public function __construct()
    {
         
    }
    public function getLoginForm() {
        return view('user.action.login');
    }
    public function postLogin(Request $request) {
        if($request->session()->has('users')) {
            return redirect('/');
        } else {
            $username = $request->username;
            $password = $request->pass;
            $count = \App\Account::login($username,$password);
            if($count>0) {
                $request->session()->put('username',$username);
                return redirect('/');
            } else {
                return redirect()->back()->with('fail','Tên đăng nhập hoặc mật khẩu không chính xác');
            }
        }   
    }
}
