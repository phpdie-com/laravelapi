<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//这里加了namespace即默认使用的是\App\Http\Controllers命名空间,不然会和laraveladmin
//App\Admin\Controllers\AuthController冲突
Route::group(['prefix' => 'auth','namespace'=>'\App\\Http\\Controllers'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    //http://local.laravel.com/api/auth/getPrivateData?token=xxxxx带上有效的token将能访问接口了
    Route::post('getPrivateData', 'Api\InfoController@getPrivateData');
});
