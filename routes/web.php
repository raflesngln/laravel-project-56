<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/hello/{nama?}', function ($nama='rafles') {
    return 'Hello '.$nama;
});

//group crud product
Route::group(['prefix'=>'product'], function () {
    Route::get('/', 'ProductController@index');
    Route::get('/create', 'ProductController@create');
    Route::post('/store', 'ProductController@store');
    Route::get('/edit/{id}', 'ProductController@edit');
    Route::get('/show/{id}', 'ProductController@show');
    Route::post('/update/{id}', 'ProductController@update');
    Route::post('/delete/{id}', 'ProductController@destroy');
    //datatable
    Route::get('/indexproduct', 'ProductController@indexproduct');
    Route::get('/getproduct', 'ProductController@getproduct');
    Route::post('/ajax_get_data', 'ProductController@ajax_get_data');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
