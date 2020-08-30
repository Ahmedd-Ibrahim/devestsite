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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'front'],function(){

    // index route
    Route::get('/','frontController@index')->name('front.index');

    // about route
    Route::get('/about','frontController@about')->name('front.about');

    // team route
    Route::get('/team','frontController@team')->name('front.team');

    // services route
    Route::get('/services','frontController@services')->name('front.services');

    // contact route
    Route::get('/contact','frontController@contact')->name('front.contact');


    // projects route
    Route::get('/project','frontController@project')->name('front.project');



});

