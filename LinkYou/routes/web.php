<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ShowJobs', 'user@showJobs')->middleware('auth');
Route::get('/Company/post','PostController@PostJob')->middleware('auth');
Route::get('/Company/edit/{id}','PostController@EditJob')->middleware('auth');
Route::get('/Company/{id}','user@IndexC')->middleware('auth');
Route::get('/Details/{id}','user@seeJob')->middleware('auth');
Route::get('/moreJobs','user@viewMore')->middleware('auth');
Route::get('/Admin','user@AdminIndex')->middleware('auth');
Route::get('/Admin/create','PostController@CreateCategory')->middleware('auth');
