<?php

use Illuminate\Support\Facades\Route;

Route::group(['name'=>'page'], function(){

    Route::get('/', function () {
        return view('home');
    });
    /*
    |--------------------------------------------------------------------------
    | Page Routes
    |--------------------------------------------------------------------------
    */
    // route contact
    Route::post('/contact/add','contact\contactController@store')->name('contact.add');
    
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

    
    Route::prefix('/contact')->group(function () {
        // begin contact
        Route::get('/list', 'contact\contactController@index')->name('contact.show.list');
        Route::get('/edit/{id}', 'contact\contactController@edit')->name('contact.show.form.edit');
        Route::post('/edit/{id}','contact\contactController@update')->name('contact.handle.edit');
        Route::post('/delete/{id}', 'contact\contactController@destroy')->name('contact.handle.delete');
        // end contact
    });

    Route::prefix('/user')->group(function () {
        // begin user
        Route::get('/list', 'Admin\MemberController@index');
        Route::get('/add', 'Admin\MemberController@create')->name('user.show.form.add');
        Route::post('/add', 'Admin\MemberController@store');
        Route::get('/edit/{id}', 'Admin\MemberController@edit');
        Route::post('/edit/{id}','Admin\MemberController@update');
        Route::post('/delete/{id}', 'Admin\MemberController@destroy');
        // end end
    });

    Route::prefix('/news')->group(function () {
        // begin user
        Route::get('/list', 'Admin\NewsController@index');
        Route::get('/add', 'Admin\NewsController@create')->name('news.show.form.add');;
        Route::post('/add', 'Admin\NewsController@store');
        Route::get('/edit/{id}', 'Admin\NewsController@edit')->name('news.show.form.edit');
        Route::post('/edit/{id}','Admin\NewsController@update');
        Route::post('/delete/{id}', 'Admin\NewsController@destroy');
        // end end
    });
});



