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

Route::get('/', function () {
    // return view('welcome');
    // echo 'hello word!';
	echo date('Y-m-d H:i:s');
});
Route::get('love', function () {
    // return view('welcome');
    // echo 'hello word!';
	echo 'hello word';
});
