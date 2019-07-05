<?php

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
],function (){
    Route::get('/home', 'AdminController@index');
    Route::post('/login', 'Admin\LoginController@login');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
//    Route::post('/logout', 'Admin\LoginController@logout')->name('logout');
    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Admin\RegisterController@register');
    Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('password.update');
});


Route::get('/admin/user', function () {
    return view('admin.show.user');
});

Route::get('/admin/clothes', function () {
    return view('admin.show.clothes');
});

Route::get('/admin/service', function () {
    return view('admin.show.service');
});

Route::get('/admin/test', function () {
    return view('admin.show.test');
});

//Route::get('/login', function () {
////    return view('admin.login.login');
////});