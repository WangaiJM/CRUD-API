<?php

use Illuminate\Http\Request;

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

//Create a post
Route::post('post', 'PostController@store');

//Access Posts
Route::get('posts', 'PostController@index');

//Access a Post
Route::get('post/{post}', 'PostController@show');

//Update a post
Route::put('post/{post}', 'PostController@update');

//Delete a post
Route::delete('post/{post}', 'PostController@destroy');