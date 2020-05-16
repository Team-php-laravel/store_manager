<?php

use Illuminate\Support\Facades\Route;

Route::group(['name' => 'page'], function () {
    /*
    |--------------------------------------------------------------------------
    | Page Routes
    |--------------------------------------------------------------------------
    */
<<<<<<< HEAD
    Route::get('/', 'ControlPageController@home');
    Route::post('/book', 'ControlPageController@book');
    Route::get('/about', 'ControlPageController@about');
    Route::get('/news', 'ControlPageController@news');
    Route::get('/news/detail/{id}', 'ControlPageController@detail');
=======
    // route contact
    Route::post('/contact/add','contact\contactController@store')->name('contact.add');
    
>>>>>>> 64cd1a3a06b679df1ad1d7de024df3b2350ea83e
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
<<<<<<< HEAD
      Quản lý tin tức
      ========================================================
=======
    Quản lý đặt bàn
    ========================================================
>>>>>>> 64cd1a3a06b679df1ad1d7de024df3b2350ea83e
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



