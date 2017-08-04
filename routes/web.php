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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', 'AboutController@index')->name('about');
Route::put('/about/{id}', 'AboutController@update')->name('about.update');

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
Route::put('/users/edit/{id}', 'UserController@update')->name('users.edit');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');

Route::delete('/users/delete/{id}', 'UserController@destroy')->name('users.delete');

Route::resource('posts', 'PostsController');