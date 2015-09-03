<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Tests\Test;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'Tests\\'.Test::find(1)->controller.'@index');
    Route::post('/', 'Tests\\'.Test::find(1)->controller.'@postSave');

    Route::get('test1',
        ['as' => 'test1', 'uses' => 'Tests\Test1Controller@index']);
    Route::get('test1/{id}', ['uses' => 'Tests\Test1Controller@getQuest', 'id' => 'id']);
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        return '123';
    });
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);
