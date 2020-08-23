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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crud','HomeController@crud')->name('crud');
Route::get('/users','HomeController@users')->name('users');
Route::get('/profile','HomeController@profile')->name('profile');
Route::get('/pointofsale','HomeController@pointofsale')->name('pointofsale');
Route::get('/inbox','HomeController@inbox')->name('inbox');
Route::get('/filemanager','HomeController@filemanager')->name('filemanager');
Route::get('/post','HomeController@post')->name('post');
Route::get('/chat','HomeController@chat')->name('chat');
