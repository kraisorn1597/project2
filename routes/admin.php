<?php

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
],function (){
    Route::get('/home', 'AdminController@index')->name('index');
    Route::post('/login', 'Admin\LoginController@login');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
//    Route::post('/logout', 'Admin\LoginController@logout')->name('logout');
    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Admin\RegisterController@register');
    Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('password.update');

    Route::group([
        'prefix' => 'employee',
        'as' => 'employee.'
    ], function (){
        Route::get('/index', 'EmployeeController@index')->name('index');
        Route::get('/create', 'EmployeeController@create')->name('create');
        Route::post('/create', 'EmployeeController@store')->name('store');
        Route::get('{id}/employee/edit', 'EmployeeController@edit')->name('edit');
        Route::post('{id}/employee/update', 'EmployeeController@update')->name('update');
        Route::delete('{id}/employee/delete', 'EmployeeController@destroy')->name('delete');
    });

    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function (){
        Route::get('/index', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/create', 'UserController@store')->name('store');
        Route::get('{id}/users/edit', 'UserController@edit')->name('edit');
        Route::post('{id}/users/update', 'UserController@update')->name('update');
        Route::delete('{id}/users/delete', 'UserController@destroy')->name('delete');
    });
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