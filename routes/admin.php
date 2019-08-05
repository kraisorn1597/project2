<?php

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
],function (){
    Route::get('/home', 'Backend\AdminController@index')->name('index');
    Route::post('/login', 'Admin\LoginController@login');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('logout');
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
        Route::get('/index', 'Backend\EmployeeController@index')->name('index');
        Route::get('/create', 'Backend\EmployeeController@create')->name('create');
        Route::post('/create', 'Backend\EmployeeController@store')->name('store');
        Route::any('/search', 'Backend\EmployeeController@search')->name('search');
        Route::get('{id}/employee/edit', 'Backend\EmployeeController@edit')->name('edit');
        Route::post('{id}/employee/update', 'Backend\EmployeeController@update')->name('update');
        Route::delete('{id}/employee/delete', 'Backend\EmployeeController@destroy')->name('delete');
    });

    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function (){
        Route::get('/index', 'Backend\UserController@index')->name('index');
        Route::get('/create', 'Backend\UserController@create')->name('create');
        Route::post('/create', 'Backend\UserController@store')->name('store');
        Route::any('/search', 'Backend\UserController@search')->name('search');
        Route::get('{id}/users/edit', 'Backend\UserController@edit')->name('edit');
        Route::post('{id}/users/update', 'Backend\UserController@update')->name('update');
        Route::delete('{id}/users/delete', 'Backend\UserController@destroy')->name('delete');
    });
    Route::group([
        'prefix' => 'clothes',
        'as' => 'clothes.'
    ], function (){
        Route::get('/index', 'Backend\ClothesController@index')->name('index');
        Route::get('/create', 'Backend\ClothesController@create')->name('create');
        Route::post('/create', 'Backend\ClothesController@store')->name('store');
        Route::any('/search', 'Backend\ClothesController@search')->name('search');
        Route::get('{id}/clothes/edit', 'Backend\ClothesController@edit')->name('edit');
        Route::post('{id}/clothes/update', 'Backend\ClothesController@update')->name('update');
        Route::delete('{id}/clothes/delete', 'Backend\ClothesController@destroy')->name('delete');
    });
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