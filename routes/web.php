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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => array('auth')], function () {
    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('/', 'Admin\ProductController@index')->name('list');
        Route::get('/create', 'Admin\ProductController@create')->name('create');
        Route::get('/edit/{id?}', 'Admin\ProductController@edit')->name('edit');
        Route::get('/delete/{id?}', 'Admin\ProductController@destroy')->name('delete');
        Route::post('/store', 'Admin\ProductController@store')->name('store');
        Route::patch('/update/{id?}', 'Admin\ProductController@update')->name('update');
    });
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('list');
        Route::get('/create', 'Admin\CategoryController@create')->name('create');
        Route::get('/edit/{id?}', 'Admin\CategoryController@edit')->name('edit');
        Route::get('/delete/{id?}', 'Admin\CategoryController@destroy')->name('delete');
        Route::post('/store', 'Admin\CategoryController@store')->name('store');
        Route::patch('/update/{id?}', 'Admin\CategoryController@update')->name('update');
    });
});

