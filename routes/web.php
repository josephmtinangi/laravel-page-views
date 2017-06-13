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

Route::get('/', 'ArticleController@index');

Auth::routes();

Route::get('search', 'SearchController@index');

Route::resource('articles', 'ArticleController');

Route::resource('articles.comments', 'CommentController');

Route::get('most-read', 'PageController@mostRead')->name('most-read');

Route::get('contact', 'PageController@contact')->name('contact');
Route::get('about', 'PageController@about')->name('about');
Route::get('photos', 'PageController@photos')->name('photos');
Route::get('archives', 'PageController@archives')->name('archives');
