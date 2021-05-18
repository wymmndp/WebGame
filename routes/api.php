<?php

use App\Account;
use App\Game;
use App\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// AppServiceController
Route::get('/listCategory', 'api\AppServiceController@getListCategory');
Route::get('/listNewGame', 'api\AppServiceController@getListNewGame');
Route::get('/listGameSale','api\AppServiceController@getListGameSale');

// AuthController
Route::post('/login', 'api\LoginAPIController@login');
Route::post('/register', 'api\RegisterAPIController@register');

// UserServiceController
Route::post('/getUser','api\UserServiceController@getUser');
Route::post('/favoriteGame',"api\UserServiceController@favorite");
Route::delete('/unFavoriteGame',"api\UserServiceController@unFavorite");
Route::post('/listGameFavorite',"api\UserServiceController@getListGameFavorite");
