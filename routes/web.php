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


Route::resource('/transaction', 'TransactionController');

Route::get('/transaction/destroy/{id}', 'TransactionController@destroy');
Route::get('/transaction', 'TransactionController@paginate');
Route::get('/transaction', 'TransactionController@category');

Route::get('/jquery', function(){
   return view('jquery.index');
});
Route::get('/html', function(){
    return view('html.index');
});

Auth::routes();

Route::get('/logika', 'TransactionController@hitung');

Route::get('/home', 'HomeController@index')->name('home');
