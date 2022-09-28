<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [LoginController::class, 'index']); // view
Route::get('/login', [LoginController::class, 'index'])->name('index'); // view
Route::post('/login', [LoginController::class, 'login'])->name('login'); // logic

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home.show');
    Route::get('/roles', 'HomeController@roles')->name('home.roles');
    Route::get('/users', 'HomeController@users')->name('home.users');
    Route::get('/logout', 'Auth\LogoutController@perform')->name('logout.perform');

    Route::post('/users/register', 'UserController@register')->name('users.register');
    Route::get('/users/destroy/{user}', 'UserController@destroy')->name('users.destroy');
    Route::get('/users/status/{user}', 'UserController@status')->name('users.status');
    Route::get('/users/edit/{user}', 'HomeController@users')->name('users.edit');
    Route::post('/users/update/{user}', 'UserController@update')->name('users.update');

    Route::get('/content', 'ContentController@index')->name('content.index');
});
