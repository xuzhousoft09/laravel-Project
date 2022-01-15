<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/basic_response', function () {
return 'Hello World';
});

Route::get('/header',function() {
return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie',function() {
return response("Hello", 200)->header('Content-Type', 'text/html')
->withcookie('name','Virat Gandhi');
});