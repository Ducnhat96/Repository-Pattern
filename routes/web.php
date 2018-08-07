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

Route::get('/','PostController@getAllPost');

Route::get('/post/{id}','PostController@findById')->name('edit.post');

Route::post('/post','PostController@createPost');

Route::put('/post/{id}','PostController@updatePost')->name('update.post');

Route::delete('/post/{id}','PostController@deletePost')->name('destroy.post');
