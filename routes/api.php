<?php

use App\Models\Local\Obavestenja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

Route::post('change-notification', 'ApiController@changeNotification');
Route::post('change-notification-service', 'ApiController@changeNotificationService');
Route::post('request-address', 'ApiController@requestAddress');
Route::get('user/{id}', 'ApiController@userById');
Route::post('auth/user', 'ApiController@auth');

Route::get('news', 'ApiController@news');
Route::get('notifications', 'ApiController@notifications');


Route::any('create-news', 'ApiController@addNews');
Route::any('create-noty', 'ApiController@addNoty');
