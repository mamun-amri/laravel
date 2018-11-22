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

//url, controler@metode

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function () {
    return 'hello world';
});

Route::get('/hello', 'WelcomeController@beriSalam');

Route::get('/products', 'ProductController@index');

Route::get('/product/display','ProductController@showAll');

Route::post('/product/save','ProductController@saveNew');
