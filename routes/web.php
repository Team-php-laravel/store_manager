<?php

use Illuminate\Support\Facades\Route;

Route::group(['name' => 'page'], function () {
    /*
    |--------------------------------------------------------------------------
    | Page Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'ControlPageController@home');
    Route::post('/book', 'ControlPageController@book');
    Route::get('/about', 'ControlPageController@about');
    Route::get('/news', 'ControlPageController@news');
    Route::get('/news/detail/{id}', 'ControlPageController@detail');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'DashboardController@index');
    Route::get('/profile', 'UserController@index');
    Route::post('/profile', 'UserController@update');

    /*========================================================
      Quản lý tin tức
      ========================================================
    */
    Route::resource('news', 'NewController');

    /*========================================================
      Quản lý nhân viên
      ========================================================
    */
    Route::resource('user', 'UserController');
    /*========================================================
      Quản lý bàn ăn
      ========================================================
    */
    Route::resource('tang', 'TangController');
    Route::post('tang/{id}/search', 'TangController@search')->name('search');
    Route::resource('book', 'BookController');
    Route::resource('order', 'OrderController');
    Route::resource('product', 'ProductController');
    Route::resource('thong_ke', 'ThongKeController');

});
