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
//show all jobs
Route::get('Jobs', "PostController@index");
//show all jobs of the company
Route::get('Jobs/{id}', "PostController@indexCompany");
//list one Job
Route::get('Job/{id}','PostController@show');
//Create post 
Route::post('create/Job','PostController@store');
//Update/Edit
Route::put('update/Job','PostController@store');
//Delete Article
Route::delete('Job/delete/{id}','PostController@destroy');
//get the categorys
Route::get('category','job_categoryController@index');
//Delete category
Route::delete('category/{id}','job_categoryController@destroy');
//Create category 
Route::post('create/category','job_categoryController@store');
//Update/Edit category
Route::put('create/category','job_categoryController@store');
//list one category of job
Route::get('category/{id}','job_categoryController@show');
//list Job of a specific Category
Route::get('Jobs/category/{category}','PostController@showCategory');

