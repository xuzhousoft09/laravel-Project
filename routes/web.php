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

Route::get('json',function() {
return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('/test', function() {
return view('test');
});

Route::get('/test', ['as'=>'testing',function() {
return view('test');
}]);
Route::get('redirect',function() {
return redirect()->route('testing');
});
Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function() {
return redirect()->action('RedirectController@index');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');