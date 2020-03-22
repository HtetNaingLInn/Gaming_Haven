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

Route::get('/','PageController@index');
//  Route::get('/{id}/post','PageController@cat');

Route::get('test/{id}/post','testController@index');
Route::get('category/{id}/post','PageController@cat');

Route::get('detail/{id}/post','PageController@show');






Route::get('register','Auth\RegisterController@show');
Route::post('register','Auth\Registercontroller@register');

Route::get('logout','Auth\LoginController@logout');

Route::get('login','Auth\LoginController@Show');
Route::post('login','Auth\LoginController@login');



Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'auth'], function () {
    
    Route::get('/dashboard','DashController@index');

    Route::get('/users','UserController@index');

    Route::get('/category','CategoryController@index');
    Route::get('/category/create','CategoryController@create');
    Route::post('/category/create','CategoryController@store');
    Route::get('/category/{id}/edit','CategoryController@edit');
    Route::post('/category/{id}/edit','CategoryController@update');


    Route::get('/post/create','PostController@create');
    Route::post('/post/create','PostController@store');
    Route::get('/post','PostController@index');
    Route::get('/post/{id}/edit','PostController@edit');
    Route::post('/post/{id}/edit','PostController@update');
    
    Route::get('post/{id}/delete','PostController@destroy');
});