<?php

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

Route::prefix('chatroom')
    ->name('chatroom.')
    ->group(function () {

        Route::get('/', 'ChatroomController@getMessages')
            ->name('list');

        Route::post('message', 'ChatroomController@sendMessage')
            ->name('message');
    });
