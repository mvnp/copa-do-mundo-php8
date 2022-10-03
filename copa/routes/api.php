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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Vai cadastrar ou atualizar o palpite dos jogadores.
Route::get('/confrontos-palpites', 'ConfrontoPalpiteController@store')->name('palpites.store');
Route::post('/confrontos-palpites', 'ConfrontoPalpiteController@store')->name('palpites.store');
Route::put('/confrontos-palpites', 'ConfrontoPalpiteController@store')->name('palpites.store');
Route::delete('/confrontos-palpites', 'ConfrontoPalpiteController@store')->name('palpites.store');
