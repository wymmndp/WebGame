<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterAPIController extends Controller
{
    public function register(Request $request) {
        if(\App\Account::register($request->username,$request->password)) {
            return response()->json([
                "code" => 201,
                "message" => "Đăng ký thành công",
            ],201);
        } else {
            return response()->json([
                "code" => 200,
                "message" => "Tên tải khoản đã tồn tại",
            ],200);
        }
    }
    
}
