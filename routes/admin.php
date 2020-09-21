<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => LaravelLocalization::setLocale() ], function ()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::group(['prefix' => 'admin'], function (){

        Route::get('dash','admin\dashboardController@index');
        Route::resource('main-Category','admin\categoriesController');
        Route::resource('sub-Category','admin\subCategoriesController');
        Route::resource('product'  ,'admin\productController');


    });


});
