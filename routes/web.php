<?php

use Illuminate\Support\Facades\Route;

Route::group(['name'=>'page'], function(){

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/book', function() {
        return view('book');
    });

    Route::get('/news', function () {
        return view('news');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
    /*
    |--------------------------------------------------------------------------
    | Page Routes
    |--------------------------------------------------------------------------
    */
});

Auth::routes();

Route::prefix('admin')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/profile', 'Admin\UserController@index');
    Route::post('/profile', 'Admin\UserController@update');

    /*========================================================
      Quản lý đặt bàn
      ========================================================
    */

    Route::prefix('table')->group(function () {
        Route::get('/{id}/storey', 'Admin\BookController@index');//Hiển thị bàn đặt theo tầng
        Route::get('/{id}/detail', 'Admin\BookController@show');//Hiển thị chi tiết
    });

});
