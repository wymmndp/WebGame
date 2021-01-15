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
Route::get('/game/play/{idgame}',[ActionUserController::class, 'playGame']);

//detailuser
Route::get('/user/{username}', [ActionUserController::class, 'getDetailUser']);
//upload your game
Route::get('/ticket/uploadgame',[ActionUserController::class,'getUploadGame']);
//Ajax
Route::post('checkUsername',['uses'=>'RegisterController@checkUsername','as'=>'checkUsername']);
Route::post('addProductToCart',['uses'=>'ActionUserController@addProductToCart','as'=>'addProductToCart']);
Route::post('loadPreInvoice',['uses'=>'ActionUserController@loadPreInvoice','as'=>'loadPreInvoice']);
Route::post('loadCoin',['uses'=>'ActionUserController@loadCoin','as'=>'loadCoin']);
Route::post('removeGameFromCart',['uses'=>'ActionUserController@removeGameFromCart','as'=>'removeGameFromCart']);
Route::get('buy',['uses'=>'ActionUserController@buy','as'=>'buy']);
Route::post('addCommentRoot',['uses'=>'ActionUserController@addCommentRoot','as'=>'addCommentRoot']);
Route::post('replyComment',['uses'=>'ActionUserController@replyComment','as'=>'replyComment']);
Route::post('loadListComment',['uses'=>'ActionUserController@loadListComment','as'=>'loadListComment']);
Route::post('loadListReplyComment',['uses'=>'ActionUserController@loadListReplyComment','as'=>'loadListReplyComment']);
Route::post('loadListReplyComment',['uses'=>'ActionUserController@loadListReplyComment','as'=>'loadListReplyComment']);
Route::post('updateInformationUser',['uses'=>'ActionUserController@updateInformationUser','as'=>'updateInformationUser']);
Route::get('searchCoin',['uses'=>'ActionUserController@searchCoin','as'=>'searchCoin']);
Route::post('upGame',['uses'=>'ActionUserController@upGame','as'=>'upGame']);
//Admin
Route::group(['prefix'=>'admin'], function() {
    Route::get('/login', [LoginController::class, 'getLoginAdminForm']);
    Route::post('/login', [LoginController::class, 'postLoginAdminForm']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/newgame', [AdminController::class, 'getNewGame']);
    Route::get('/all-user', [AdminController::class, 'getAllUser']);
    Route::get('/allcategories', [AdminController::class, 'getAllCategories']);
    Route::get('/allgame', [AdminController::class, 'getAllGame']);
    Route::get('/detailuser/{username}', [AdminController::class, 'getSeeUser']);
    Route::get('/detailgame/{idgame}',[AdminController::class,'getDetailGame']);
    Route::get('/logout', [LogoutController::class, 'logoutadmin']);
    Route::get('/userupgame',[AdminController::class,'getUserUpGame']);
    Route::get('/test',[AdminController::class,'test']);
    //Ajax
    Route::post('getDanhMuc',['uses'=>'AdminController@getDanhMuc','as'=>'getDanhMuc']);
    Route::post('addDanhMuc',['uses'=>'AdminController@addDanhMuc','as'=>'addDanhMuc']);
    Route::post('updateDanhMuc',['uses'=>'AdminController@updateDanhMuc','as'=>'updateDanhMuc']);
    Route::post('deleteDanhMuc',['uses'=>'AdminController@deleteDanhMuc','as'=>'deleteDanhMuc']);
    Route::post('updateInformation',['uses'=>'AdminController@updateInformation','as'=>'updateInformation']);
    Route::post('updateUser',['uses'=>'AdminController@updateUser','as'=>'updateUser']);
    Route::post('searchUser',['uses'=>'AdminController@searchUser','as'=>'searchUser']);
    Route::post('searchGameAdmin',['uses'=>'AdminController@searchGameAdmin','as'=>'searchGameAdmin']);
    Route::post('addgame',['uses'=>'AdminController@addgame','as'=>'addgame']);
    Route::post('updategame',['uses'=>'AdminController@updategame','as'=>'updategame']);
    Route::post('deletegame',['uses'=>'AdminController@deletegame','as'=>'deletegame']);
    Route::post('giftgame',['uses'=>'AdminController@giftgame','as'=>'giftgame']);
    Route::get('giftcoin',['uses'=>'AdminController@giftcoin','as'=>'giftcoin']);
    Route::post('sendMailSuccess',['uses'=>'AdminController@sendMailSuccess','as'=>'sendMailSuccess']);
    Route::post('sendMailRefuse',['uses'=>'AdminController@sendMailRefuse','as'=>'sendMailRefuse']);
    Route::post('getInformationOfGame',['uses'=>'AdminController@getInformationOfGame','as'=>'getInformationOfGame']);
    Route::post('deleteGameOfUserUpload',['uses'=>'AdminController@deleteGameOfUserUpload','as'=>'deleteGameOfUserUpload']);
});
