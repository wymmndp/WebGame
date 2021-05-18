<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
            $account = \App\Account::login($username,$password);
            if(!is_null($account)) {
                $request->session()->put('username',$username);
                return redirect('/');
            } else {
                return redirect()->back()->with('fail','Tên đăng nhập hoặc mật khẩu không chính xác');
            }
        }   
    }
    public function getLoginAdminForm(Request $request) {
        if($request->session()->has('admin')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.action.loginadmin');
        }
    }
    public function postLoginAdminForm(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $account = \App\Account::login($username,$password);
        if(!is_null($account)) {
            if($account->type == "admin" || $account->type=="sadmin") {
                $request->session()->put('admin',$account->username);
                return redirect('admin/dashboard');
            } else return redirect()->back()->with('fail','Bạn không có quyền truy cập');
        } else {
            return redirect()->back()->with('fail','Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }
}
