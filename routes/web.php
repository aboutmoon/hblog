<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test');

Route::post('api/login', 'Api\LoginController@login');
Route::post('api/register', 'Api\LoginController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\LoginController@details');
});