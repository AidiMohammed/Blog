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

Route::view('laravel/','app.welcome')->name('laravel');
Route::resource('/posts','PostController');
Route::get('/posts/{post}/confirm','PostController@confirmDelet')->name('posts.confirmDelet');
Route::get('/comment/crate/post/{post}','CommentController@create')->name('comments.create');
Route::post('/comment/post/{post}','CommentController@store')->name('comments.store');
Route::delete('/comment/{comment}','CommentController@destroy')->name('comments.destroy');
Route::get('/comment/{comment}/edit','CommentController@edit')->name('comments.edit');
Route::put('/comment/{comment}','CommentController@update')->name('comments.update');