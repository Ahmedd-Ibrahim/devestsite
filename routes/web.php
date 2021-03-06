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

Auth::routes([
    'register' => false,
    'login'=>false
]);


//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'front'],function(){

    // index route
    Route::get('/','frontController@index')->name('front.index');

    Route::post('/send','frontController@send')->name('front.send');

});

