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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => 'locale'], function () {
    Auth::routes();
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('change-language');
    Route::get('/', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('/{id?}', 'HomeController@product')->name('product');
        Route::get('detail/{id?}', 'HomeController@detail')->name('detail');
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => array('auth')], function () {
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('/', 'Admin\ProfileController@index')->name('list');
            Route::patch('/{id?}', 'Admin\ProfileController@update')->name('update');
        });
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', 'Admin\ProductController@index')->name('list');
            Route::get('/create', 'Admin\ProductController@create')->name('create');
            Route::get('/edit/{id?}', 'Admin\ProductController@edit')->name('edit');
            Route::get('/deleteImage/{id?}', 'Admin\ProductController@deleteImage')->name('deleteImage');
            Route::delete('/delete/{id?}', 'Admin\ProductController@destroy')->name('delete');
            Route::post('/store', 'Admin\ProductController@store')->name('store');
            Route::patch('/update/{id?}', 'Admin\ProductController@update')->name('update');
        });
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', 'Admin\CategoryController@index')->name('list');
            Route::get('/create', 'Admin\CategoryController@create')->name('create');
            Route::get('/edit/{id?}', 'Admin\CategoryController@edit')->name('edit');
            Route::delete('/delete/{id?}', 'Admin\CategoryController@destroy')->name('delete');
            Route::post('/store', 'Admin\CategoryController@store')->name('store');
            Route::patch('/update/{id?}', 'Admin\CategoryController@update')->name('update');
        });
    });
});

