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


Route::get('/admin/home', function () {
    return view('backend.home');
});

Route::get('/admin/user', function () {
    return view('backend.show.user');
});

Route::get('/admin/clothes', function () {
    return view('backend.show.clothes');
});
Route::get('/admin/service', function () {
    return view('backend.show.service');
});

Route::get('/admin/test', function () {
    return view('backend.show.test');
});

Route::get('/login', function () {
    return view('backend.login.login');
});
