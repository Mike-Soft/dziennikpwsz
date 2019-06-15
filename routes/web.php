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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController')->middleware('auth');
Route::resource('grades', 'GradeController')->middleware('auth');

Route::get('/users/{user}/delete', 'UserController@destroy')->middleware('auth');

Route::resource('classes', 'ClasController')->middleware('auth');

Route::get('/{class}/{subject}', 'SubjectController@index')->middleware('auth')->name('grades.view');

Route::post('/grade/{user}/{subject}', 'GradeController@new')->name('grades.new');

Route::get('/szukaj','SearchController@index')->middleware('auth')->name('user.search');
Route::get('/search','SearchController@search')->middleware('auth');

//Route::get('/{class}/users', 'ClasController@showall')->name('show.all');