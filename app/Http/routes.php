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
Route::get('/', 'Welcome\IndexController@getIndex');


Route::controller('task/work','Task\Work');
Route::controller('task/manage','Task\Manage');
Route::controller('task','Task\Task');