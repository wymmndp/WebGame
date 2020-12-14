<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ActionUserController::class, 'default']);
//login
Route::get('/login', [LoginController::class, 'getLoginForm']);
Route::post('/login', [LoginController::class, 'postLogin']);
//register
Route::get('/register', [RegisterController::class, 'getRegisterForm']);
Route::post('/register', [RegisterController::class, 'postRegister']);
//logout
Route::get('/logout', [LogoutController::class, 'logout']);
//catogaries
Route::get('/tag/{iddm}', [ActionUserController::class, 'viewGameFromCategory']);
Route::get('/all-categories',[ActionUserController::class, 'viewAllCategories']);
//detailgame
Route::get('/game/{idgame}',[ActionUserController::class, 'viewDetailGame']);
//play game
Route::get('/game/play/{idgame}',[ActionUserController::class, 'playGame']);
//test
Route::get('/test', [ActionUserController::class, 'test']);
//Ajax
Route::post('checkUsername',['uses'=>'RegisterController@checkUsername','as'=>'checkUsername']);
Route::post('addProductToCart',['uses'=>'ActionUserController@addProductToCart','as'=>'addProductToCart']);
Route::post('loadPreInvoice',['uses'=>'ActionUserController@loadPreInvoice','as'=>'loadPreInvoice']);
Route::post('loadCoin',['uses'=>'ActionUserController@loadCoin','as'=>'loadCoin']);
Route::post('removeGameFromCart',['uses'=>'ActionUserController@removeGameFromCart','as'=>'removeGameFromCart']);
Route::get('buy',['uses'=>'ActionUserController@buy','as'=>'buy']);