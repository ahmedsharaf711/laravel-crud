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


Route::get('/' , 'StudentController@index')->name('home');
Route::get('/create' , 'StudentController@create')->name('create');
Route::post('/create' , 'StudentController@store')->name('store');


Route::get('/edit/{id}' , 'StudentController@edit')->name('edit');
Route::post('/update/{id}' , 'StudentController@update')->name('update');


Route::get('/delete/{id}' , 'StudentController@delete')->name('delete');




Route::get('/hello', function () {
    return ('hello world');
});


Route::get('/user/{id}', function ($id) {
    return ('Your Id Is'.$id);
});
