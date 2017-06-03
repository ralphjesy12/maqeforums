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
Route::get('/', 'ForumController@index');
Route::get('/forumjs', function(){
    return view('forumjs');
});

Route::get('/posts', 'ForumController@getPosts');
Route::get('/authors', 'ForumController@getAuthors');
