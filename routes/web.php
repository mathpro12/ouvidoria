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

Route::prefix('cadastro')->group(function () {
    Route::get('/', [
        'uses' => 'Auth\RegisterController@getCreate',
        'as' => 'get.create',
    ]);

    Route::post('/', [
        'uses' => 'Auth\RegisterController@postCreate',
        'as' => 'post.create',
    ]);
});

Route::prefix('/login')->group(function () {
    Route::post('/', [
        'uses' => 'Auth\LoginController@login',
        'as' => 'post.login',
    ]);
});

Route::get('/statuses', [
    'uses' => 'Statuses\ExampleController@lists',
    'as' => 'get.stauses',
]);

Route::post('/statuses', [
    'uses' => 'Statuses\ExampleController@store',
    'as' => 'post.statuses',
]);
