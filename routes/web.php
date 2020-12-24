<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionUserController;
use App\Http\Controllers\AdminController;
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
//searchgame
Route::get('/searchGame',['uses'=>'ActionUserController@searchGame','as'=>'searchGame']);
//detailgame
Route::get('/game/{idgame}',[ActionUserController::class, 'viewDetailGame']);
//play game
Route::get('/game/play/{idgame}',[ActionUserController::class, 'playGame'])->middleware('auth');
//test
Route::get('/test', [ActionUserController::class, 'test']);
//Ajax
Route::post('checkUsername',['uses'=>'RegisterController@checkUsername','as'=>'checkUsername']);
Route::post('addProductToCart',['uses'=>'ActionUserController@addProductToCart','as'=>'addProductToCart']);
Route::post('loadPreInvoice',['uses'=>'ActionUserController@loadPreInvoice','as'=>'loadPreInvoice']);
Route::post('loadCoin',['uses'=>'ActionUserController@loadCoin','as'=>'loadCoin']);
Route::post('removeGameFromCart',['uses'=>'ActionUserController@removeGameFromCart','as'=>'removeGameFromCart']);
Route::get('buy',['uses'=>'ActionUserController@buy','as'=>'buy']);
Route::post('addCommentRoot',['uses'=>'ActionUserController@addCommentRoot','as'=>'addCommentRoot']);
Route::post('replyComment',['uses'=>'ActionUserController@replyComment','as'=>'replyComment']);
Route::post('loadListCommentRoot',['uses'=>'ActionUserController@loadListCommentRoot','as'=>'loadListCommentRoot']);
Route::post('loadListReplyComment',['uses'=>'ActionUserController@loadListReplyComment','as'=>'loadListReplyComment']);


//Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'getLoginAdminForm'])->name('login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
    Route::get('/newgame', [AdminController::class, 'getNewGame'])->middleware('auth');
    Route::get('/all-user', [AdminController::class, 'getAllUser'])->middleware('auth');
    Route::get('/allcategories', [AdminController::class, 'getAllCategories'])->middleware('auth');
});