<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', array('as' => 'home','uses' => 'Controller@home'));		
Route::get('auth/login/facebook', array('as' => 'login.facebook','uses' => 'Auth\LoginFacebookController@redirect'));		
Route::get('auth/login/facebook/callback', 'Auth\LoginFacebookController@callback');

Route::get('/auth/check', function () {
    return view('check');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
