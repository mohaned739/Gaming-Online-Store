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
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/adminpanel','customersController@showAll');
Route::get('/adminpanel/{id}','customersController@destroy');
Route::get('/adminpanel2/{id}','customersController@promot_admin');
Route::get('/createcust','customersController@create');

Route::get('/store', 'productsController@showAll');
Route::get('/store/{id}', 'productsController@findproduct');
Route::get('/adminpanel3/{id}', 'productsController@delete_game');
Route::get('/create','productsController@create');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/order','ordersController@showAll');

Route::get('/order/{id?}','ordersController@showAll');


Route::post('/storegame','productsController@store');
Route::get('/form',function (){
    return view('game_form');
});