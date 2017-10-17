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

Route::get('/', [
    'uses' => 'Menu\MenuController@get',
    'as' => 'get.menu',
]);

Route::prefix('register')->group(function () {
    Route::get('/', [
        'uses' => 'Auth\RegisterController@getCreate',
        'as' => 'get.register',
    ]);

    Route::post('/', [
        'uses' => 'Auth\RegisterController@postCreate',
        'as' => 'post.register',
    ]);
});

Route::prefix('/login')->group(function () {
    Route::get('/', [
        'uses' => 'Auth\LoginController@getLogin',
        'as' => 'login',
    ]);

    Route::post('/', [
        'uses' => 'Auth\LoginController@postLogin',
        'as' => 'post.login',
    ]);
});

Route::prefix('/logged-in-requests')->group(function () {
    Route::get('/', [
        'uses' => 'Requests\LoggedInRequestsController@getCreate',
        'as' => 'get.logged-in-requests',
    ]);

    Route::post('/', [
        'uses' => 'Requests\LoggedInRequestsController@postCreate',
        'as' => 'post.logged-in-requests',
    ]);
});

Route::prefix('/anonymous-requests')->group(function () {
    Route::get('/', [
        'uses' => 'Requests\AnonymousRequestsController@getCreate',
        'as' => 'get.anonymous-requests',
    ]);

    Route::post('/', [
        'uses' => 'Requests\AnonymousRequestsController@postCreate',
        'as' => 'post.anonymous-requests',
    ]);
});

Route::prefix('/me')->group(function () {
    Route::get('/', [
        'uses' => 'Me\MeController@getHome',
        'as' => 'get.home',
    ]);
});
