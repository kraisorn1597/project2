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

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/index3', function () {
    return view('index3');
});
Route::get('/index4', function () {
    return view('frontend.index.index');
});

Route::get('/contact-us', function () {
    return view('frontend.partials.contact-us');
});

Route::group([
    'prefix' => 'users',
    'as' => 'users.'
], function (){
    Route::get('/profile', 'BackendUser\BackendUserController@profile')->name('profile');
    Route::get('/edit', 'BackendUser\BackendUserController@edit')->name('edit');
    Route::post('{id}/update', 'BackendUser\BackendUserController@update')->name('update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
