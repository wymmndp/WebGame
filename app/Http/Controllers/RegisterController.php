<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{   
    public function __construct()
    {
    }
    public function getRegisterForm() {
       return view('user.action.register');
    }
    public function postRegister(Request $request) {
        $username = $request->username;
        $password = $request->pass;
        if(\App\Account::checkUsername($username)) {
            return redirect('register')->with('fail','Đăng ký thất bại');
        } else {
            if(\App\Account::register($username,$password)) {
                return redirect('login')->with('success','Đăng Ký thành công');
            } else return false;
        }
     }
     public function checkUsername(Request $request) {
        if(\App\Account::checkUsername($request->username)) {
            return 'Tài khoản đã tồn tại';
        } else return 'Tài khoản hợp lệ';
     }
}
